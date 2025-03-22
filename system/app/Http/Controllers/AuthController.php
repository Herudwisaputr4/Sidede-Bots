<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\MasterAdmin;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function LoginProses()
    {
        if (auth()->guard('master-admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('master-admin')->with('success', 'Login Berhasil');
        }

		if (auth()->guard('admin')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('admin')->with('success', 'Login Berhasil');
        }

		

		return redirect('login');
    }


    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
		auth()->guard('master-admin')->logout();
		
		return redirect('/');
    }


    function test(){
		$user= new Admin();
        $user->nama= 'Admin SDN 1';
        $user->username= 'admin';
        $user->sekolah_asal= 'SDN 1';
		$user->email= 'fulan@gmail.com';
		$user->password=bcrypt('admin');
		$user->save();

		return "Berhasil";

    }

    function test_master(){
		$user= new MasterAdmin();
        $user->nama= 'Master Admin';
        $user->username= 'masteradmin';
		$user->email= 'fulan@gmail.com';
		$user->password=bcrypt('masteradmin');
		$user->save();

		return "Berhasil";

    }

}