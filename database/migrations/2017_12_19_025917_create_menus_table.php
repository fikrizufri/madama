<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jenis_id')->unsigned()->index();
            $table->integer('rekanan_id')->unsigned()->index();
            $table->string('nama_menu');
            $table->integer('harga_jual');
            $table->string('gambar');
            $table->timestamps();

            $table->foreign('jenis_id')
                ->references('id')
                ->on('jenis_menus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('rekanan_id')
                ->references('id')
                ->on('rekanans')
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
        Schema::dropIfExists('menus');
    }
}
