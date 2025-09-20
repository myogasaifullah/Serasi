<?php

namespace App\Services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;
use Exception;

class GoogleSheetsService
{
    private $client;
    private $service;
    private $spreadsheetId;
    private $sheetName;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName('Serasi Laravel App');
        $this->client->setScopes([Sheets::SPREADSHEETS]);
        $this->client->setAuthConfig(storage_path('app/google-credentials.json'));
        $this->client->setAccessType('offline');

        $this->service = new Sheets($this->client);
        $this->spreadsheetId = env('GOOGLE_SHEET_ID');
        $this->sheetName = env('GOOGLE_SHEET_NAME', 'Data Serasi');
    }

    /**
     * Get all records from the spreadsheet
     */
    public function getAllRecords()
    {
        try {
            $range = $this->sheetName . '!A2:Z'; // Start from row 2 to skip headers
            $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
            $values = $response->getValues();

            if (empty($values)) {
                return [];
            }

            $records = [];
            foreach ($values as $index => $row) {
                $records[] = [
                    'id' => $index + 1,
                    'nama' => $row[0] ?? '',
                    'npm' => $row[1] ?? '',
                    'email' => $row[2] ?? '',
                    'telpon' => $row[3] ?? '',
                    'kategori' => $row[4] ?? '',
                    'deskripsi_laporan' => $row[5] ?? '',
                    'status' => $row[6] ?? 'tinjau',
                    'pesan_balasan' => $row[7] ?? null,
                    'created_at' => $row[8] ?? now(),
                    'updated_at' => $row[9] ?? now(),
                ];
            }

            return $records;
        } catch (Exception $e) {
            throw new Exception('Error fetching data from Google Sheets: ' . $e->getMessage());
        }
    }

    /**
     * Create a new record in the spreadsheet
     */
    public function createRecord(array $data)
    {
        try {
            $values = [[
                $data['nama'],
                $data['npm'],
                $data['email'],
                $data['telpon'],
                $data['kategori'],
                $data['deskripsi_laporan'],
                $data['status'] ?? 'tinjau',
                $data['pesan_balasan'] ?? '',
                now()->toDateTimeString(),
                now()->toDateTimeString(),
            ]];

            $body = new ValueRange([
                'values' => $values
            ]);

            $params = [
                'valueInputOption' => 'RAW'
            ];

            $range = $this->sheetName . '!A:Z';
            $this->service->spreadsheets_values->append(
                $this->spreadsheetId,
                $range,
                $body,
                $params
            );

            return true;
        } catch (Exception $e) {
            throw new Exception('Error creating record in Google Sheets: ' . $e->getMessage());
        }
    }

    /**
     * Update a record in the spreadsheet
     */
    public function updateRecord($recordId, array $data)
    {
        try {
            // Get all records to find the row number
            $records = $this->getAllRecords();
            $rowIndex = $recordId + 1; // +1 because array is 0-indexed and we skip header row

            $values = [[
                $data['nama'] ?? $records[$recordId-1]['nama'],
                $data['npm'] ?? $records[$recordId-1]['npm'],
                $data['email'] ?? $records[$recordId-1]['email'],
                $data['telpon'] ?? $records[$recordId-1]['telpon'],
                $data['kategori'] ?? $records[$recordId-1]['kategori'],
                $data['deskripsi_laporan'] ?? $records[$recordId-1]['deskripsi_laporan'],
                $data['status'] ?? $records[$recordId-1]['status'],
                $data['pesan_balasan'] ?? $records[$recordId-1]['pesan_balasan'],
                $records[$recordId-1]['created_at'],
                now()->toDateTimeString(),
            ]];

            $body = new ValueRange([
                'values' => $values
            ]);

            $params = [
                'valueInputOption' => 'RAW'
            ];

            $range = $this->sheetName . '!A' . $rowIndex . ':J' . $rowIndex;
            $this->service->spreadsheets_values->update(
                $this->spreadsheetId,
                $range,
                $body,
                $params
            );

            return true;
        } catch (Exception $e) {
            throw new Exception('Error updating record in Google Sheets: ' . $e->getMessage());
        }
    }

    /**
     * Delete a record from the spreadsheet
     */
    public function deleteRecord($recordId)
    {
        try {
            // Get all records to find the row number
            $records = $this->getAllRecords();
            $rowIndex = $recordId + 1; // +1 because array is 0-indexed and we skip header row

            // Clear the row instead of deleting (Google Sheets doesn't support row deletion easily)
            $values = [['', '', '', '', '', '', '', '', '', '']];

            $body = new ValueRange([
                'values' => $values
            ]);

            $params = [
                'valueInputOption' => 'RAW'
            ];

            $range = $this->sheetName . '!A' . $rowIndex . ':J' . $rowIndex;
            $this->service->spreadsheets_values->update(
                $this->spreadsheetId,
                $range,
                $body,
                $params
            );

            return true;
        } catch (Exception $e) {
            throw new Exception('Error deleting record from Google Sheets: ' . $e->getMessage());
        }
    }

    /**
     * Search records based on criteria
     */
    public function searchRecords($search = null, $kategori = null, $status = null)
    {
        $records = $this->getAllRecords();

        if ($search) {
            $records = array_filter($records, function($record) use ($search) {
                return str_contains(strtolower($record['nama']), strtolower($search)) ||
                       str_contains(strtolower($record['npm']), strtolower($search)) ||
                       str_contains(strtolower($record['email']), strtolower($search));
            });
        }

        if ($kategori) {
            $records = array_filter($records, function($record) use ($kategori) {
                return $record['kategori'] === $kategori;
            });
        }

        if ($status) {
            $records = array_filter($records, function($record) use ($status) {
                return $record['status'] === $status;
            });
        }

        return array_values($records);
    }

    /**
     * Get paginated records
     */
    public function getPaginatedRecords($perPage = 10, $page = 1, $search = null, $kategori = null, $status = null)
    {
        $records = $this->searchRecords($search, $kategori, $status);

        $total = count($records);
        $offset = ($page - 1) * $perPage;
        $paginatedRecords = array_slice($records, $offset, $perPage);

        return [
            'data' => $paginatedRecords,
            'total' => $total,
            'per_page' => $perPage,
            'current_page' => $page,
            'last_page' => ceil($total / $perPage),
            'from' => $total > 0 ? $offset + 1 : null,
            'to' => $total > 0 ? $offset + count($paginatedRecords) : null,
        ];
    }
}
