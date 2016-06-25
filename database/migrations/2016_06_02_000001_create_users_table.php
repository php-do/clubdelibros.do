<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.core.users'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('third_id')->unsigned();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('user_role_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->boolean('verified')->default(false);
            $table->string('token')->nullable();
            $table->rememberToken();
            $table->timestamps();

            //Foreign Key's
            $table->foreign('third_id')->references('id')->on(config('books.tables.core.third'))->onDelete('cascade');
            $table->foreign('user_role_id')->references('id')->on(config('books.tables.core.user_role'))->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on(config('books.tables.core.status'))->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.core.users'));
    }
}
