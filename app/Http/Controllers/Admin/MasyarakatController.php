<?php

namespace App\Http\Controllers\Admin;
use App\Models\Masyarakat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat = Masyarakat::all();

        return view('Admin.Masyarakat.index', ['masyarakat' => $masyarakat]);
    }
    public function show($nik){
        
        $masyarakat = Masyarakat::where('nik', $nik)->first();


        return view('Admin.Masyarakat.show',[ 'masyarakat' => $masyarakat]);
    }
}
