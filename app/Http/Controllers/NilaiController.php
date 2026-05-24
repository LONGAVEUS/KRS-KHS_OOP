<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $daftarNilai = Nilai::with(['mahasiswa', 'matakuliah'])->get();
        return view('nilai.nilai', compact('daftarNilai'));
    }

    public function create()
    {
        $daftarMataKuliah = MataKuliah::all();
        return view('nilai.create', compact('daftarMataKuliah'));
    }

    public function store(Request $request)
{
    $request->validate([
        'mahasiswa_id'   => 'required|string',
        'matakuliah_id'  => 'required|string',
        'semesterTarget' => 'required|integer|between:1,8',
        'nilaiAngka'     => 'required|numeric|min:0|max:100',
    ]);

    // Membuat instance objek nilai baru
    $nilai = new Nilai();
    $nilai->mahasiswa_id = $request->mahasiswa_id;

    $nilai->matakuliah_id = $request->matakuliah_id;

    $nilai->semesterTarget = $request->semesterTarget;
    $nilai->nilaiAngka = $request->nilaiAngka;

    $nilai->nilaiHuruf = $nilai->konversiKeHuruf();
    $nilai->save();

        return redirect()->route('nilai.index')->with('sukses', 'Nilai dummy berhasil disimpan!');
    }
}

