<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rawat_jalans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spesialis_id');
            $table->unsignedBigInteger('pasiens_id');
            $table->unsignedBigInteger('jadwal_dokters_id');
            $table->date('tanggal_pemeriksaan');
            $table->unsignedBigInteger('antrian');
            $table->timestamps();

            $table->foreign('spesialis_id')->references('id')->on('spesialis')->onDelete('cascade');
            $table->foreign('pasiens_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('jadwal_dokters_id')->references('id')->on('jadwal_dokters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rawat_jalans');
    }
};
