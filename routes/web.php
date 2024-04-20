<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified', 'check_babinsa'])->group(function () {
    // Semua rute yang memerlukan autentikasi dan memeriksa peran 'Babinsa'
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/list-laporan', [LaporanController::class, 'index'])->name('list-laporan');
    Route::post('/tambah-laporan', [LaporanController::class, 'store'])->name('laporan.store');

   Route::get('/tambah-laporan', function () {
        return view('tambah-laporan');
    })->name('tambah-laporan');
    Route::get('/edit-laporan/{id}', [LaporanController::class, 'edit'])->name('edit-laporan');
    Route::put('/laporan/{laporan}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::delete('/laporan/{laporan}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
    Route::get('/laporan/{laporan}', [LaporanController::class, 'show'])->name('laporan.show');
    // Tambahkan rute-rute lainnya di sini...
});
<<<<<<< HEAD

Route::get('/profile', function () {
    return view('profile');
});
// web.php
Route::get('/berita/label/{label}', [PostController::class, 'getBeritaByLabel'])->name('berita-label');

Route::get('/tmmd-detail/{id}', [TmmdController::class, 'getSinglePost'])->name('tmmd-detail');
Route::get('/tmmd/label/{label}', [TmmdController::class, 'getTmmdByLabel'])->name('tmmd-label');
Route::get('/list-tmmd', [TmmdController::class, 'getTmmd'])->name('list-tmmd');


// Rute untuk 'Pejabat'


Route::middleware(['auth:sanctum', 'verified', 'check_babinsa'])->group(function ()  {
    // Rute-rute yang memerlukan autentikasi
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/list-pejabat', [LaporanController::class, 'list'])->name('list-pejabat');


     Route::get('/dashboard-babinsa', [DashboardBabinsaController::class, 'index'])->name('dashboard-babinsa');
    Route::get('/list-laporan-babinsa', [LaporanController::class, 'list'])->name('list-laporan-babinsa');
     Route::get('/tambah-laporan-babinsa', [LaporanController::class, 'list'])->name('tambah-laporan-babinsa');
     Route::get('/edit-laporan-babinsa', [LaporanController::class, 'list'])->name('edit-laporan-babinsa');



       Route::get('/dashboard-koranmil', [DashboardKoranmilController::class, 'index'])->name('dashboard-koranmil');
    Route::get('/list-laporan-koranmil', [LaporanController::class, 'list'])->name('list-laporan-koranmil');
     Route::get('/tambah-laporan-koranmil', [LaporanController::class, 'list'])->name('tambah-laporan-koranmil');
     Route::get('/edit-laporan-koranmil', [LaporanController::class, 'list'])->name('edit-laporan-koranmil');
// Route::get('/edit-pejabat/{pejabat}', [PejabatController::class, 'editList'])->name('edit-pejabat-list');
      Route::get('/tambah-pejabat', function () {
        return view('tambah-pejabat');
    })->name('tambah-pejabat');
      Route::get('/tambah-postingan', function () {
        return view('tambah-postingan');
    })->name('tambah-postingan');
    // Rute untuk 'Post'
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/post', [PostController::class, 'store'])->name('posts.store');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
  Route::get('/list-posts', [PostController::class, 'index'])->name('list-posts');
Route::get('/edit-postingan/{id}', [PostController::class, 'edit'])->name('edit-postingan');
    // Rute untuk 'Pejabat'
    Route::get('/pejabat/create', [PejabatController::class, 'create'])->name('pejabat.create');
    Route::post('/tambah-pejabat', [PejabatController::class, 'store'])->name('pejabat.store');
Route::get('/edit-pejabat/{id}', [PejabatController::class, 'edit'])->name('edit-pejabat');




Route::put('/pejabat/update/{id}', [PejabatController::class, 'update'])->name('pejabat.update');

    Route::delete('/pejabat/{pejabat}', [PejabatController::class, 'destroy'])->name('pejabat.destroy');

    // Route::get('/tambah-pejabat', [PejabatController::class, 'index'])->name('pejabat.index');
Route::get('/pejabat/{pejabat}', [PejabatController::class, 'show'])->name('pejabat.show');



//tmmd
Route::get('/list-tmmd', [TmmdController::class, 'index'])->name('list-tmmd');
Route::get('/tmmd/create', [TmmdController::class, 'create'])->name('tmmd.create');
Route::get('/tmmd/{tmmd}', [TmmdController::class, 'show'])->name('tmmd.show');
Route::get('/edit-tmmd/{id}', [TmmdController::class, 'edit'])->name('edit-tmmd');
Route::put('/tmmd/update/{tmmd}', [TmmdController::class, 'update'])->name('tmmd.update');
Route::delete('/tmmd/{tmmd}', [TmmdController::class, 'destroy'])->name('tmmd.destroy');
Route::get('/tambah-tmmd', [TmmdController::class, 'index'])->name('tmmd.index');
 Route::post('/tambah-tmmd', [TmmdController::class, 'store'])->name('tmmd.store');
  Route::get('/tambah-tmmd', function () {
        return view('tambah-tmmd');
    })->name('tambah-tmmd');



    //tmmd
Route::get('/list-bencana', [BencanaController::class, 'index'])->name('list-bencana');
Route::get('/bencana/create', [BencanaController::class, 'create'])->name('bencana.create');
Route::get('/bencana/{bencana}', [BencanaController::class, 'show'])->name('bencana.show');
Route::get('/edit-bencana/{id}', [BencanaController::class, 'edit'])->name('edit-bencana');
Route::put('/bencana/update/{bencana}', [BencanaController::class, 'update'])->name('bencana.update');
Route::delete('/bencana/{bencana}', [BencanaController::class, 'destroy'])->name('bencana.destroy');
Route::get('/tambah-bencana', [BencanaController::class, 'index'])->name('bencana.index');
 Route::post('/tambah-bencana', [BencanaController::class, 'store'])->name('bencana.store');
  Route::get('/tambah-bencana', function () {
        return view('tambah-bencana');
    })->name('tambah-bencana');

        //tmmd
Route::get('/list-baksos', [BaksosController::class, 'index'])->name('list-baksos');
Route::get('/baksos/create', [BaksosController::class, 'create'])->name('baksos.create');
Route::get('/baksos/{baksos}', [BaksosController::class, 'show'])->name('baksos.show');
Route::get('/edit-baksos/{id}', [BaksosController::class, 'edit'])->name('edit-baksos');
Route::put('/baksos/update/{baksos}', [BaksosController::class, 'update'])->name('baksos.update');
Route::delete('/baksos/{baksos}', [BaksosController::class, 'destroy'])->name('baksos.destroy');
Route::get('/tambah-baksos', [BaksosController::class, 'index'])->name('baksos.index');
 Route::post('/tambah-baksos', [BaksosController::class, 'store'])->name('baksos.store');
  Route::get('/tambah-baksos', function () {
        return view('tambah-baksos');
    })->name('tambah-baksos');



});

=======
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
