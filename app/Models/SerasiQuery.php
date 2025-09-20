<?php

namespace App\Models;

use App\Services\GoogleSheetsService;

class SerasiQuery
{
    private $sheetsService;
    private $conditions = [];

    public function __construct()
    {
        $this->sheetsService = new GoogleSheetsService();
    }

    /**
     * Add where condition
     */
    public function where($column, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            $value = $operator;
            $operator = '=';
        }

        $this->conditions[] = [
            'column' => $column,
            'operator' => $operator,
            'value' => $value
        ];

        return $this;
    }

    /**
     * Add orWhere condition
     */
    public function orWhere($column, $operator = null, $value = null)
    {
        if (func_num_args() == 2) {
            $value = $operator;
            $operator = '=';
        }

        $this->conditions[] = [
            'column' => $column,
            'operator' => $operator,
            'value' => $value,
            'type' => 'or'
        ];

        return $this;
    }

    /**
     * Execute the query and get results
     */
    public function get()
    {
        $records = $this->sheetsService->getAllRecords();

        if (empty($this->conditions)) {
            return collect($records);
        }

        $filteredRecords = [];

        foreach ($records as $record) {
            $matches = true;

            foreach ($this->conditions as $condition) {
                $column = $condition['column'];
                $operator = $condition['operator'];
                $value = $condition['value'];
                $type = $condition['type'] ?? 'and';

                $recordValue = $record[$column] ?? '';

                $conditionMatches = $this->evaluateCondition($recordValue, $operator, $value);

                if ($type === 'or') {
                    $matches = $matches || $conditionMatches;
                } else {
                    $matches = $matches && $conditionMatches;
                }

                if (!$matches && $type !== 'or') {
                    break;
                }
            }

            if ($matches) {
                $filteredRecords[] = $record;
            }
        }

        return collect($filteredRecords);
    }

    /**
     * Get first result
     */
    public function first()
    {
        return $this->get()->first();
    }

    /**
     * Evaluate a single condition
     */
    private function evaluateCondition($recordValue, $operator, $value)
    {
        switch ($operator) {
            case '=':
            case '==':
                return $recordValue == $value;
            case '!=':
                return $recordValue != $value;
            case 'like':
                return str_contains(strtolower($recordValue), strtolower($value));
            case 'not like':
                return !str_contains(strtolower($recordValue), strtolower($value));
            case '>':
                return $recordValue > $value;
            case '<':
                return $recordValue < $value;
            case '>=':
                return $recordValue >= $value;
            case '<=':
                return $recordValue <= $value;
            default:
                return false;
        }
    }
}
