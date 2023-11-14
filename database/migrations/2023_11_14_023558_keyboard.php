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
        Schema::create('Keyboard', function (Blueprint $table) {
            $table->id();
            $table->integer('SERI')->unique();
            $table->string('Nama', 100);
            $table->string('Pembuat/Buatan Dari', 100);
            $table->integer('Harga', );
            $table->string('Kategori', 250);
            $table->date('tanggal-rilis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
