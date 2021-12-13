<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id('id_reservasi');
            $table->bigInteger('id_hotel');
            $table->integer('jml_tamu');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->integer('lama_inap');
            $table->string('nama_pemesan');
            $table->bigInteger('no_identitas');
            $table->bigInteger('no_hp');
            $table->integer('diskon');
            $table->integer('total_byr');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
}
