<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignprojects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('bookingid');
            $table->foreign('bookingid')->references('id')->on('bookings')->unique();
            $table->unsignedBigInteger('teamid');
            $table->foreign('teamid')->references('id')->on('teams');
            $table->date('startingdate');
            $table->date('endingdate');
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
        Schema::dropIfExists('assignprojects');
    }
}
