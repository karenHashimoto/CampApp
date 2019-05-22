<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FacilityMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facility_masters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('camp_id', 25);//
            $table->tinyInteger('css_numbers')->unsigned();//css適用
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facility_masters');
    }
}
