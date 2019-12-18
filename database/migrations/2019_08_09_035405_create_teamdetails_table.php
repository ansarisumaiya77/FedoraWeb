<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('teamid');
            $table->foreign('teamid')->references('id')->on('teams');
            $table->unsignedBigInteger('employeeid');
            $table->foreign('employeeid')->references('id')->on('users');
            $table->string('role');
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
        Schema::dropIfExists('teamdetails');
    }
}
