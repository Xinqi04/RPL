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
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasiens_id');
            $table->unsignedBigInteger('rawat_jalans_id');
            $table->string('diagnosa');
            $table->timestamps();

            $table->foreign('pasiens_id')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('rawat_jalans_id')->references('id')->on('rawat_jalans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekam_medis');
    }
};
