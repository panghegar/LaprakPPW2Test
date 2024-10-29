<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Database\Seeders\BukuSeeder;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $data_buku = Buku::all();
    //     $total_buku = $data_buku->count(); // Menghitung jumlah total buku
    //     $total_harga = $data_buku->sum('harga'); // Menghitung total harga semua buku
    
    //     return view('buku.index', compact('data_buku', 'total_buku', 'total_harga'));    
    // }
    
    // public function index()
    // {
    //     $batas = 5;
    //     $data_buku = Buku::all()-> paginate($batas);
    //     $total_buku = $data_buku->count() ; // Menghitung jumlah total buku
    //     $total_harga = $data_buku->sum('harga'); // Menghitung total harga semua buku
    
    //     return view('buku.index', compact('data_buku', 'total_buku', 'total_harga'));    
    // }

    public function index(Request $request)
    {
    $batas = 5;
    // Hapus `all()`, langsung gunakan `paginate()`
    $data_buku = Buku::paginate($batas);
    
    // Menghitung jumlah total buku
    $total_buku = Buku::count();
    
    // Menghitung total harga semua buku
    $total_harga = Buku::sum('harga');

    $batas = 5;
    $cari = $request->kata;
    $data_buku = Buku::where('judul', 'like', "%" . $cari . "%")
        ->orWhere('penulis', 'like', "%" . $cari . "%")
        ->paginate($batas);
    
    $jumlah_buku = $data_buku->count();
    $no = $batas * ($data_buku->currentPage() - 1);
        
    return view('buku.index', compact('data_buku', 'total_buku', 'total_harga', 'cari'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date',
        ]);
    
        // Membuat objek buku baru dan mengisi data
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
    
        // Redirect dengan pesan sukses
        return redirect('/buku')->with('pesan_sukses', 'Data buku berhasil disimpan');
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buku = Buku::findOrFail($id); // Cari data buku berdasarkan ID
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date',
        ]);
    
        // Update data buku
        $buku = Buku::findOrFail($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('buku.index')->with('pesan_sukses', 'Data buku berhasil diupdate');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
    
        // Redirect dengan pesan sukses
        return redirect('/buku')->with('pesan_sukses', 'Data buku berhasil dihapus');
    }
    
    public function search(Request $request) {
        $batas = 5;
        $cari = $request->kata;
        $data_buku = Buku::where('judul', 'like', "%" . $cari . "%")
            ->orWhere('penulis', 'like', "%" . $cari . "%")
            ->paginate($batas);
        
        $jumlah_buku = $data_buku->count();
        $no = $batas * ($data_buku->currentPage() - 1);
        
        return view('buku.search', compact('jumlah_buku', 'data_buku', 'no', 'cari'));
    }
    
}
