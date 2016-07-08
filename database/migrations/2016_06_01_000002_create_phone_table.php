<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('books.tables.core.phone'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('third_id')->unsigned();
            $table->integer('phone_type_id')->unsigned();
            $table->string('number', 20);
            $table->timestamps();

            //Foreign Key's
            $table->foreign('third_id')->references('id')->on(config('books.tables.core.third'))->onDelete('cascade');
            $table->foreign('phone_type_id')->references('id')->on(config('books.tables.core.phone_type'))->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('books.tables.core.phone'));
    }
}
