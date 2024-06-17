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
        Schema::create('radiologis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasiens_id');
            $table->string('kategori');
            $table->date('tanggal_pemeriksaan');
            $table->timestamps();
            
            $table->foreign('pasiens_id')->references('id')->on('pasiens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('radiologis');
    }
};
