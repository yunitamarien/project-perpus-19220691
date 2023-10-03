<?php

namespace App\Controllers;

use App\Models\KoleksiBukuModel;
use CodeIgniter\Controller;

class KoleksiBuku extends Controller
{
    public function index()
    {
        $model = new KoleksiBukuModel();
        $data['collections'] = $model->findAll();
        
        return view('koleksibuku/index', $data);
    }

    // Add other CRUD methods for managing book collections here
}
