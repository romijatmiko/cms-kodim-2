<?php

// DashboardController.php
namespace App\Http\Controllers;

use App\Models\Laporan;

class DashboardController extends Controller
{
    
    public function index()
    {
        $jumlahLaporan = Laporan::count();


        return view('dashboard', compact('jumlahLaporan'));
    }
}
