<?php

namespace App\Models;

use CodeIgniter\Model;

class KoleksiBukuModel extends Model
{
    protected $table = 'koleksi_buku'; // Name of your database table for book collections
    protected $primaryKey = 'id'; // Primary key column name
    protected $allowedFields = ['buku_id', 'nama_koleksi', 'deskripsi']; // Fields that can be inserted/updated

    // Other model methods can be added here as needed

    public function getBookCollection($collectionId)
    {
        return $this->where('id', $collectionId)->first();
    }

    // Define other custom methods for managing book collections
}
