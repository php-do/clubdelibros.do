<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.library.books_owner'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamps();

            //Foreign Key's
            $table->foreign('book_id')->references('id')->on(config('books.tables.library.books'))->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on(config('books.tables.core.users'))->onDelete('cascade');

            //Unique Key's
            $table->unique(['book_id', 'user_id'], 'books_owner_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.library.books_owner'));
    }
}
