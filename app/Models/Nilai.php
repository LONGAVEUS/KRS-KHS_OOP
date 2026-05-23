<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $primaryKey = 'idNilai';

    protected $fillable = [
        'mahasiswa_id',
        'matakuliah_id',
        'semesterTarget',
        'nilaiAngka',
        'nilaiHuruf',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'id');
    }

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id', 'kodeMK');
    }

    public function konversiKeHuruf(): string
    {
        $angka = $this->nilaiAngka;

        if ($angka >= 80) return 'A';
        elseif ($angka >= 70) return 'B';
        elseif ($angka >= 60) return 'C';
        elseif ($angka >= 50) return 'D';
        else return 'E';
    }

    public function getNilaiAkhir(): float
    {
        return (float) $this->nilaiAngka;
    }
}