<?php

namespace App\Http\Controllers\MasterAdmin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Sekolah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $totalSekolah = Sekolah::count();
        $totalAdmin = Admin::count();

        return view('master-admin.index', compact('totalSekolah', 'totalAdmin'));
    }
}