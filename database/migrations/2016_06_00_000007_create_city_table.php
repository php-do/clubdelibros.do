<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.core.city'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('province_id')->unsigned();
            $table->string('name', 100);
            $table->timestamps();

            //Foreign Key's
            $table->foreign('province_id')->references('id')->on(config('books.tables.core.province'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.core.city'));
    }
}
