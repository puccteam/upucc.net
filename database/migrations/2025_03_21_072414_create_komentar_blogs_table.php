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
        Schema::create('komentar_blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_blog')->references('id')->on('blog');
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->text('isi')->nullable();
            $table->foreignId('id_status')->references('id')->on('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar_blog');
    }
};
