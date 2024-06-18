<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAntrianToLaboratoriumsTable extends Migration
{
    public function up()
    {
        Schema::table('laboratoriums', function (Blueprint $table) {
            $table->unsignedBigInteger('antrian')->after('tanggal_pemeriksaan')->nullable();
        });
    }

    public function down()
    {
        Schema::table('laboratoriums', function (Blueprint $table) {
            $table->dropColumn('antrian');
        });
    }
}
