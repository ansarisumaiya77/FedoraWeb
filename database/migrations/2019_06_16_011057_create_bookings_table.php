<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customerid');
            $table->foreign('customerid')->references('id')->on('users');
            $table->unsignedBigInteger('projectid');
            $table->foreign('projectid')->references('id')->on('projects');
            $table->integer('size');
            $table->string('address');
            $table->string('email');
            $table->string('contact');
            $table->string('customername');
            $table->float('price');
            $table->unsignedBigInteger('statusid');
            //$table->foreign('statusid')->references('id')->on('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
