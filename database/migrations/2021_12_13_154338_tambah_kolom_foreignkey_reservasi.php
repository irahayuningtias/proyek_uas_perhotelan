<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomForeignkeyReservasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservasi', function (Blueprint $table){
            $table->unsignedBigInteger('id_hotel')->nullable();
            $table->foreign('id_hotel')->references('id_hotel')->on('hotel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservasi', function (Blueprint $table){
            $table->bigInteger('id_hotel');
            $table->dropForeign(['id_hotel']);

        });
    }
}
