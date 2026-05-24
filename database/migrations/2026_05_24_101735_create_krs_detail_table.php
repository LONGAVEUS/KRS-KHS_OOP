<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('krs_detail', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('krs_id'); 
        $table->string('mk_kode');
        $table->timestamps();


        $table->foreign('krs_id')->references('idKRS')->on('krs')->onDelete('cascade');
        $table->foreign('mk_kode')->references('kodeMK')->on('mata_kuliah')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs_detail');
    }
};
