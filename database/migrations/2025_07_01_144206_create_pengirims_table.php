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
        Schema::create('pengirims', function (Blueprint $table) {
            $table->id('id_pengirim');
            $table->string('nama_pengirim');
            $table->string('alamat_pengirim');
            $table->integer('kode_pos');
            $table->string('telp_pengirim');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengirims');
    }
};
