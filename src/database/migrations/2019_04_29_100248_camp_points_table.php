<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CampPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_points', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->unsignedInteger('camp_id')->index();
            $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            $table->unsignedInteger('points_id')->index();
            $table->foreign('points_id')->references('id')->on('points')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_points');
    }
}
