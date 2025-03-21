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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penulis')->references('id')->on('user');
            $table->foreignId('id_kategori')->references('id')->on('kategori');
            $table->foreignId('id_status')->references('id')->on('status');
            $table->string('judul')->nullable();
            $table->text('isi')->nullable();
            $table->integer('tayangan')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
