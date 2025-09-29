<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galeri', function (Blueprint $table) {
            $table->id('id_galeri');
            $table->string('judul',50);
            $table->text('keterangan')->nullable();
            $table->string('file',100)->nullable();
            $table->enum('kategori', ['foto','video']);
            $table->date('tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galeri');
    }
};
