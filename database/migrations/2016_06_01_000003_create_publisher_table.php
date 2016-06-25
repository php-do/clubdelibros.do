<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublisherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.core.publisher'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('third_id')->unsigned();
            $table->timestamps();

            //Foreign Key's
            $table->foreign('third_id')->references('id')->on(config('books.tables.core.third'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.core.publisher'));
    }
}
