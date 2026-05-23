<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->id('idNilai');
            $table->string('mahasiswa_id');
            $table->string('matakuliah_id');
            $table->integer('semesterTarget');
            $table->float('nilaiAngka');
            $table->string('nilaiHuruf');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilai');
    }
};