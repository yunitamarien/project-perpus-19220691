<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku'; // Name of your database table for books
    protected $primaryKey = 'id'; // Primary key column name
    protected $allowedFields = ['judul', 'pengarang', 'tahun_terbit']; // Fields that can be inserted/updated

    // Other model methods can be added here as needed
}
