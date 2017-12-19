<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MenuBahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('menu_bahans', function (Blueprint $table) {
          $table->integer('menu_id')->unsigned()->index();
          $table->integer('bahan_id')->unsigned()->index();
          $table->timestamps();

          $table->primary(['menu_id', 'bahan_id']);

          $table->foreign('bahan_id')
                ->references('id')
                ->on('bahans')
                ->onDelete('cascade')
                ->onUpdate('cascade');

          $table->foreign('menu_id')
                ->references('id')
                ->on('menus')
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
        Schema::dropIfExists('menu_bahans');
    }
}
