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
        Schema::table('radiologis', function (Blueprint $table) {
            $table->unsignedBigInteger('antrian')->after('tanggal_pemeriksaan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('radiologis', function (Blueprint $table) {
            $table->dropColumn('antrian');
        });
    }
};
