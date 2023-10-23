<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;

class loginControllers extends BaseController
{
    public function index()
    {
        return view('login/login');
    }
    public function login(){
    }
    public function ceklogin(){

        $email =request()->getPost('email');
        $katasandi = request()->getPost('katasandi');

        $m = new penggunaModel();
        $r = $m ->where('email',$email)
                ->where('katasandi',$katasandi)->first();
        if($r== null){
            return "gagal login";
        }else{
            session()->set('pengguna', $r);
            return redirect()->to(base_url('/'));
        }
    }
    
      public function lupa_password(){}
      public function daftaranggotabaru(){
   
    }

    public function logout(){
        return view('login/login');
    }
}