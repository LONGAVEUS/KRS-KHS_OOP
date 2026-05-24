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
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id', 'kodeMK');
    }

    public function matakuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'matakuliah_id', 'kodeMK');
    }

    public function konversiKeHuruf(): string
    {
        $angka = $this->nilaiAngka;

        if ($angka >= 4.0) return 'A';
        elseif ($angka >= 3.0) return 'B';
        elseif ($angka >= 2.0) return 'C';
        elseif ($angka >= 1.0) return 'D';
        else return 'E';
    }

    public function getNilaiAkhir(): float
    {
        return (float) $this->nilaiAngka;
    }
}
