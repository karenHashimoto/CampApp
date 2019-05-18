<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CgPicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cg_pictures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('camp_id',10);//camp_id
            $table->string('cg_pic',128);//キャンプ場画像
            $table->string('cg_pic_comment',10);//写真コメント
            $table->timestamp('created_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cg_pictures');
    }
}
