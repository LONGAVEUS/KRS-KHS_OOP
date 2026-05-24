<?php

namespace App\Http\Controllers;

use App\Models\Krs;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class KrsController extends Controller
{
    public function index()
    {
        $daftarKrs = Krs::with('daftarMK')->get();
        return view('krs.krs', compact('daftarKrs'));
    }

    public function create()
    {
        $mataKuliah = MataKuliah::all();
        return view('krs.create', compact('mataKuliah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required|string',
            'kodeMK'       => 'required|exists:mata_kuliah,kodeMK',
        ]);

        $krs = Krs::firstOrCreate([
            'mahasiswa_id' => $request->mahasiswa_id,
        ], [
            'totalSKS'     => 0
        ]);

        $mk = MataKuliah::where('kodeMK', $request->kodeMK)->first();
        $krs->tambahMataKuliah($mk);
        $krs->hitungTotalSKS();

        return redirect()->route('krs.index')->with('sukses', 'KRS berhasil dibuat!');
    }
}
