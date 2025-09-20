<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\GoogleSheetsService;

class Serasi extends Model
{
    use HasFactory;

    protected $table = 'serasi';

    protected $fillable = [
        'nama',
        'npm',
        'email',
        'telpon',
        'kategori',
        'deskripsi_laporan',
        'status',
        'pesan_balasan',
    ];

    private $sheetsService;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->sheetsService = new GoogleSheetsService();
    }

    /**
     * Get all records from Google Sheets
     */
    public static function all($columns = ['*'])
    {
        $instance = new static();
        return collect($instance->sheetsService->getAllRecords());
    }

    /**
     * Find a record by ID
     */
    public static function find($id)
    {
        $instance = new static();
        $records = $instance->sheetsService->getAllRecords();

        return collect($records)->firstWhere('id', $id);
    }

    /**
     * Find a record by ID or fail
     */
    public static function findOrFail($id)
    {
        $record = static::find($id);

        if (!$record) {
            throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
        }

        return $record;
    }

    /**
     * Create a new record
     */
    public static function create(array $attributes = [])
    {
        $instance = new static();
        $instance->sheetsService->createRecord($attributes);
    }

    /**
     * Update the record
     */
    public function update(array $attributes = [], array $options = [])
    {
        $this->sheetsService->updateRecord($this->id, $attributes);
        $this->fill($attributes);
    }

    /**
     * Delete the record
     */
    public function delete()
    {
        $this->sheetsService->deleteRecord($this->id);
    }

    /**
     * Save the record (for compatibility)
     */
    public function save(array $options = [])
    {
        if ($this->exists) {
            $this->update($this->getAttributes());
        } else {
            $this->sheetsService->createRecord($this->getAttributes());
            $this->exists = true;
        }
    }

    /**
     * Check if record exists
     */
    public function exists()
    {
        return isset($this->id);
    }

    /**
     * Get the fillable attributes
     */
    public function getFillable()
    {
        return $this->fillable;
    }

    /**
     * Fill the model with attributes
     */
    public function fill(array $attributes)
    {
        foreach ($attributes as $key => $value) {
            if (in_array($key, $this->fillable)) {
                $this->setAttribute($key, $value);
            }
        }
        return $this;
    }

    /**
     * Set attribute
     */
    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    /**
     * Get attribute
     */
    public function getAttribute($key)
    {
        return $this->attributes[$key] ?? null;
    }

    /**
     * Get attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Query builder for search functionality
     */
    public static function query()
    {
        return new SerasiQuery();
    }

    /**
     * Get latest records
     */
    public static function latest($column = 'created_at')
    {
        $records = static::all();
        return collect($records)->sortByDesc($column);
    }

    /**
     * Paginate records
     */
    public static function paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
    {
        $instance = new static();
        $page = $page ?: request()->get('page', 1);
        $search = request()->get('search');
        $kategori = request()->get('kategori');
        $status = request()->get('status');

        $result = $instance->sheetsService->getPaginatedRecords($perPage, $page, $search, $kategori, $status);

        return new \Illuminate\Pagination\LengthAwarePaginator(
            $result['data'],
            $result['total'],
            $result['per_page'],
            $result['current_page'],
            [
                'path' => request()->url(),
                'pageName' => $pageName,
            ]
        );
    }
}
