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
        Schema::create('profil_sekolah', function (Blueprint $table) {
            $table->id('id_profil');
            $table->string('nama_sekolah',50);
            $table->string('kepala_sekolah',50);
            $table->string('foto',100)->nullable();
            $table->string('logo',100)->nullable();
            $table->string('npsn',10);
            $table->text('alamat');
            $table->string('kontak',15)->nullable();
            $table->text('visi_misi')->nullable();
            $table->year('tahun_berdiri')->nullable();
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profil_sekolah');
    }
};
