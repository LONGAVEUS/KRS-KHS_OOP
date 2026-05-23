<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{

    public function index()
    {

        $daftarMataKuliah = MataKuliah::all();


        return view('matakuliah', compact('daftarMataKuliah'));
    }

    public function create()
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'kodeMK'   => 'required|string|unique:mata_kuliah,kodeMK',
            'namaMK'   => 'required|string|min:3',
            'sks'      => 'required|integer|min:1|max:6',
            'semester' => 'required|integer|between:1,8',
        ]);

        MataKuliah::create([
            'kodeMK'   => $request->kodeMK,
            'namaMK'   => $request->namaMK,
            'sks'      => $request->sks,
            'semester' => $request->semester,
        ]);


        return redirect()->route('matakuliah.index')->with('sukses', 'Mata Kuliah berhasil ditambahkan!');
    }
}



