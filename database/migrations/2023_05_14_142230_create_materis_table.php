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
        Schema::create('materis', function (Blueprint $table) {
            $table->id();
            $table->string("judul");
            $table->string("foto")->nullable();
            $table->boolean("ebook")->default(false);
            $table->boolean("ppt")->default(false);
            $table->boolean("contoh_soal")->default(false);
            $table->string("deskripsi")->nullable();
            $table->string("file")->nullable();
            $table->foreignId('semester_id')->constrained('semesters');
            $table->foreignId('matkul_id')->constrained('matkuls');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materis');
    }
};
