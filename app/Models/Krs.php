<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Krs extends Model
{
    protected $table = 'krs';
    protected $primaryKey = 'idKRS';

    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'idKRS',
        'mahasiswa_id',
        'totalSKS'
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'nim');
    }

    public function daftarMK()
    {
        return $this->belongsToMany(MataKuliah::class, 'krs_detail', 'krs_id', 'mk_kode');
    }

    public function tambahMataKuliah(MataKuliah $mk): bool
    {
        $this->daftarMK()->attach($mk->kodeMK);
        return true;
    }

    public function hitungTotalSKS(): int
    {
        $total = $this->daftarMK()->sum('sks');
        $this->totalSKS = $total;
        $this->save();
        return $total;
    }

    public function validasiBatasSKS(): bool
    {
        return $this->hitungTotalSKS() <= 24;
    }
}
