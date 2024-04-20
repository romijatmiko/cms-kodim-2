<?php

// app/Models/Pejabat.php
// app/Models/Post.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = ['title', 'isi', 'img', 'label', 'status'];


=======
    protected $fillable = ['title', 'isi', 'img', 'status', 'distrik'];

    // Tidak ada hubungan dengan kategori dalam contoh ini
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
}


