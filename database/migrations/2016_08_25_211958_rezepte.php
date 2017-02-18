<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rezepte extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezept', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titel');
            $table->string('text');
        });

        Schema::create('rezept_zutaten', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rezept_id');
            $table->integer('zutat_id');
            $table->integer('menge');
            $table->integer('einheit');
        });

        Schema::create('zutat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titel');
            $table->string('text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rezept');
    }
}
