<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';

    protected $primaryKey = 'kodeMK';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'kodeMK',
        'namaMK',
        'sks',
        'semester'
    ];

    public function getKodeMK(): string
    {
        return $this->kodeMK;
    }

    public function getSKS(): int
    {
        return $this->sks;
    }

    public function tampilkanInfoMK(): string
    {
        return "[{$this->kodeMK}] {$this->namaMK} - {$this->sks} SKS (Semester {$this->semester})";
    }
}
