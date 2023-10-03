<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class Buku extends Controller
{
    public function index()
    {
        $model = new BukuModel();
        $data['books'] = $model->findAll();
        
        return view('buku/index', $data);
    }

    // Add other CRUD methods for managing books here
}
