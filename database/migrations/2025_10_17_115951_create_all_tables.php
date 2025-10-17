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
        // Tabel kelas
   Schema::create('kelas', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->string('nama_kelas');
    $table->timestamps();
});

Schema::create('mata_kuliah', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->string('nama_mk');
    $table->integer('sks');
    $table->timestamps();
});

Schema::create('users', function (Blueprint $table) {
    $table->uuid('id')->primary();
    $table->string('nama'); // ubah dari 'name' jadi 'nama'
    $table->string('npm')->unique(); // tambahkan kolom npm
    $table->foreignUuid('kelas_id')->nullable()->constrained('kelas')->onDelete('set null');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('mata_kuliahs');
        Schema::dropIfExists('kelas');
    }
};
