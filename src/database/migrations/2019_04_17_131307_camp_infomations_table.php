<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CampInfomationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('camp_name', 30);
            $table->string('title', 50);
            $table->string('sub_title', 100);
            $table->string('recommend_1', 50);
            $table->string('recommend_2', 50);
            $table->string('recommend_3', 50);
            $table->string('recommend_img_1', 128);
            $table->string('recommend_img_2', 128);
            $table->string('recommend_img_3', 128);
            $table->string('state', 8);
            $table->string('city', 24);
            $table->string('address', 64);
            $table->string('phone', 13);
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->string('access_comment', 100);
            $table->string('owner_pic', 128);
            $table->string('owner_comment', 191);
            $table->string('plan_name', 15);
            $table->string('plan_comment', 25);
            $table->string('plan_fee', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informations');
    }
}
