<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.library.books'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('third_id')->unsigned();
            $table->boolean('ebook');
            $table->integer('publisher_id')->unsigned();
            $table->date('published')->nullable();
            $table->string('description');
            $table->timestamps();

            //Foreign Key's
            $table->foreign('third_id')->references('id')->on(config('books.tables.core.third'))->onDelete('cascade');
            $table->foreign('publisher_id')->references('id')->on(config('books.tables.core.publisher'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.library.books'));
    }
}
