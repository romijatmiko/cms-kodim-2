<?php

// DashboardController.php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Pejabat;
use App\Models\Tmmd;
use App\Models\Baksos;
use App\Models\Bencana;

class DashboardBabinsaController extends Controller
{
    public function index()
    {
        $jumlahLaporan = Laporan::count();
        

        return view('dashboard-babinsa', compact('jumlahLaporan'));
    }
}
