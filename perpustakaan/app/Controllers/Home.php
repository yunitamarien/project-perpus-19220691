<?php
namespace App\Controllers;
class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    {   
        $p = session()->get('Anggota'); 
        return view('home/dashboard', [
            'Anggota' => $p
        ]);
    }
}
}