<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahKolomForeignkeyDetailReservasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_reservasi', function (Blueprint $table){
            $table->foreign('id_hotel')->references('id_hotel')->on('hotel');
            $table->foreign('id_kamar')->references('id_kamar')->on('kamar');
            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_reservasi', function (Blueprint $table){
            $table->bigInteger('id_hotel');
            $table->dropForeign(['id_hotel']);
            $table->bigInteger('id_reservasi');
            $table->dropForeign(['id_reservasi']);
            $table->string('id_kamar');
            $table->dropForeign(['id_kamar']);
        });
    }
}
