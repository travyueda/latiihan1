<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosterController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'file_poster' => 'required|image|mimes:png,jpg|max:2048',
        ]);

        $path = $request->file('file_poster')->store('judul-poster' , 'public');

        $data = [
            'name' => $request->name,
            'kelas' => $request->kelas,
            'poster' => $request->poster,
            'file_poster' => $path,
        ];

        return view('poster', ['data' => $data]);
    }
}