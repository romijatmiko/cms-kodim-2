<?php

<<<<<<< HEAD
// app/Http/Controllers/PostController.php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
=======
namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LaporanController extends Controller
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
  public function index()
{
    $laporans = Laporan::all();
    return view('list-laporans', compact('laporans'));
}

=======
    public function index()
    {
        $laporan = Laporan::all();
        return view('list-laporan', compact('laporan'));
    }
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('post.create');
=======
        return view('laporan.create');
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $validatedData = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'img' => 'required|string',
            'label' => 'required|string',
             'status' => 'required|string',
        ]);

        Post::create($validatedData);

        return redirect()->route('tambah-postingan')->with('success', 'Post berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

  public function getLaporan()
{
    $posts = Post::paginate(5);
    $latestPosts = Post::latest()->take(5)->get();
    $labels = Post::distinct('label')->pluck('label');
    return view('laporan', compact('posts', 'latestPosts', 'labels'));
}

public function getLaporanByLabel($label)
{
    $posts = Post::where('label', $label)->paginate(5);
    $latestPosts = Post::latest()->take(5)->get();
    $labels = Post::distinct('label')->pluck('label');
    
    return view('laporan', compact('posts', 'latestPosts', 'labels'));
}
// PostController.php
public function getSinglePost($id)
{
    $post = Post::find($id);
    if (!$post) {
        // Jika tidak ditemukan, redirect ke halaman edit dengan pesan error
        return redirect()->route('laporan-detail')->with('error', 'Pejabat data not found.');
    }

    // Mengirimkan data pejabat ke view
    return view('laporan-detail', compact('post'));
}



    /**
     * Show the form for editing the specified resource.
     */
public function edit($id)
{
    // Mengambil data pejabat berdasarkan ID
    $post = Post::find($id);

    // Mengecek apakah pejabat ditemukan
    if (!$post) {
        // Jika tidak ditemukan, redirect ke halaman edit dengan pesan error
        return redirect()->route('edit-laporan-babinsa')->with('error', 'Pejabat data not found.');
    }

    // Mengirimkan data pejabat ke view
    return view('edit-laporan-babinsa', compact('post'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
            'img' => 'required|string',
            'label' => 'required|string',
             'status' => 'required|string',
        ]);

        $post->update($validatedData);

        return redirect()->route('list-laporan-babinsa')->with('success', 'Post berhasil diperbarui.');
=======
        try {
            // Validasi input data
            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'isi' => 'required|string',
                'status' => 'required|string',
                'img' => 'required|string|max:255',
                'distrik' => 'required|string|max:255',
            ]);

            // Simpan data ke database
            Laporan::create($validatedData);

            return redirect()->route('dashboard')->with('success', 'Laporan berhasil ditambahkan');
        } catch (\Exception $e) {
            // Tangkap kesalahan dan catat ke log
            Log::error('Error while storing laporan: ' . $e->getMessage());

            // Redirect kembali ke halaman sebelumnya dengan pesan kesalahan
            return redirect()->back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $laporan = Laporan::find($id);

        if (!$laporan) {
            return redirect()->route('edit-laporan')->with('error', 'Data laporan tidak ditemukan.');
        }

        return view('edit-laporan', compact('laporan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'isi' => 'required|string',
            'img' => 'required|string',
            'status' => 'required|string',
            'distrik' => 'required|string',
        
        ]);

        $laporan->update($validatedData);

        return redirect()->route('list-laporan')->with('success', 'Laporan berhasil diperbarui.');
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('list-laporan-babinsa')->with('success', 'Post berhasil dihapus.');
    }
}

=======
    public function destroy(Laporan $laporan)
    {
        $laporan->delete();

        return redirect()->route('list-laporan')->with('success', 'Laporan berhasil dihapus.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        return view('laporan.show', compact('laporan'));
    }
}
>>>>>>> 5090c0447caae7f45ee8ac1ff39bfcedcf2ce4a7
