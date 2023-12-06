<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $kategori = Kategori::all(); // Mengambil semua kategori dari database
        $selectedCategoryId = $request->input('id_kategori'); // Mendapatkan kategori yang dipilih
    
        // Jika kategori dipilih, filter produk berdasarkan kategori, jika tidak, tampilkan semua produk
        if ($selectedCategoryId) {
            $pengaduan = Pengaduan::where('id_kategori', $selectedCategoryId)->get();
        } else {
            $pengaduan = Pengaduan::orderBy('tgl_pengaduan','desc')->get();
        }
    
        // $pengaduan = Pengaduan::orderBy('tgl_pengaduan','desc')->get();
        return view('Admin.Pengaduan.index',compact('kategori','pengaduan'));
    }
    public function show($id_pengaduan)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id_pengaduan)->first();

        $tanggapan = Tanggapan::where('id_pengaduan', $id_pengaduan)->first();

        return view('Admin.Pengaduan.show',['pengaduan'=> $pengaduan, 'tanggapan' => $tanggapan]);
    }
}
