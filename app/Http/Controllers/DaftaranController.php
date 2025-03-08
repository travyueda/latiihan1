<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;

class DaftaranController extends Controller
{

    public function index(){
        return view('index');
    }

    public function kirim(Request $request){
        $request->session()->put('nama', $request->input('name'));
        $request->session()->put('kelas', $request->input('kelas'));
        $request->session()->put('judul', $request->input('judul'));
        $path = $request->file('poster')->getClientOriginalName();
        $request->session()->put('poster', '/images/' . $path);
        $request->poster->move(public_path('images'), $path);
        return redirect('/lomba');
    }
    
    public function lomba(Request $request){
        $nama = $request->session()->get('nama');
        $kelas = $request->session()->get('kelas');
        $judul = $request->session()->get('judul');
        $poster = $request->session()->get('poster');

        return view('lomba', ["nama" => $nama, "kelas" => $kelas, "judul" => $judul, "poster" => $poster]);
    }
    
}
