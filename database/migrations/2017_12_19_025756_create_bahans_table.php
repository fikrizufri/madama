<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_id')->unsigned()->index();
            $table->string('nama_bahan');
            $table->string('stok');
            $table->integer('harga_jual');
            $table->string('satuan');
            $table->string('gambar');
            $table->timestamps();

            $table->foreign('jenis_id')
                ->references('id')
                ->on('jenis_bahans')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bahans');
    }
}
