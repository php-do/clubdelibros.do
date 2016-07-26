<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.library.books_language'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('language_id')->unsigned();
            $table->timestamps();

            //Foreign Key's
            $table->foreign('book_id')->references('id')->on(config('books.tables.library.books'))->onDelete('cascade');
            $table->foreign('language_id')->references('id')->on(config('books.tables.core.language'))->onDelete('cascade');

            //Unique Key's
            $table->unique(['book_id', 'language_id'], 'books_language_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.library.books_language'));
    }
}
