<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pejabat;

class PejabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      Pejabat::create([
        'name' => 'Letkol Inf. Hamzah Budi Susanto, S.E., M.I.P',
        'img' => 'https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg',
        'kategori' => 'Dandim',
        'position' => 'Dandim Kodim 0624/Kabupaten Bandung',
         'description' => 'Dandim Kodim 0624/Kabupaten Bandung',
    ]);
     Pejabat::create([
        'name' => 'Mayor Chb (K) Sri Nurhaeni',
        'img' => 'https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg',
        'kategori' => 'Kasdim',
        'position' => 'Kasdim Kodim 0624/Kabupaten Bandung',
         'description' => 'Kasdim Kodim 0624/Kabupaten Bandung',
    ]);
     Pejabat::create([
        'name' => 'Kapten Inf Asep Sukandar sebagai Pasi Intel Kodim 0624/ Kab Bandung',
        'img' => 'https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg',
        'kategori' => 'Pasi',
        'position' => 'PASI Kodim 0624/Kabupaten Bandung',
         'description' => 'PASI Kodim 0624/Kabupaten Bandung',
    ]);
     Pejabat::create([
        'name' => 'Kapten Inf Mulyono sebagai Pasiter Kodim 0624/ Kab Bandung',
        'img' => 'https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg',
        'kategori' => 'Pasi',
        'position' => 'PASI Kodim 0624/Kabupaten Bandung',
         'description' => 'PASI Kodim 0624/Kabupaten Bandung',
    ]);
     Pejabat::create([
        'name' => 'Kapten Arm Tedi Sopian sebagai Pasi Log Kodim 0624/ Kab Bandung',
        'img' => 'https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg',
        'kategori' => 'Pasi',
        'position' => 'PASI Kodim 0624/Kabupaten Bandung',
         'description' => 'PASI Kodim 0624/Kabupaten Bandung',
    ]);
    Pejabat::create([
        'name' => 'Kapten Inf Aang Purtoni sebagai Pasi Pers Kodim 0624/ Kab Bandung',
        'img' => 'https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg',
        'kategori' => 'Pasi',
        'position' => 'PASI Kodim 0624/Kabupaten Bandung',
         'description' => 'PASI Kodim 0624/Kabupaten Bandung',
    ]);
    Pejabat::create([
        'name' => 'Kapten Inf Yudi Komara sebagai Pasi Ops Kodim 0624/ Kab Bandung',
        'img' => 'https://i.pinimg.com/originals/8b/16/7a/8b167af653c2399dd93b952a48740620.jpg',
        'kategori' => 'Pasi',
        'position' => 'PASI Kodim 0624/Kabupaten Bandung',
         'description' => 'PASI Kodim 0624/Kabupaten Bandung',
    ]);
    }
}
