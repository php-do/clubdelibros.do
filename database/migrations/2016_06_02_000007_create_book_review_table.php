<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.library.books_review'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //Foreign Key's
            $table->foreign('book_id')->references('id')->on(config('books.tables.library.books'))->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on(config('books.tables.core.users'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.library.books_review'));
    }
}
