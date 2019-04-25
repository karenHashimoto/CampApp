<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->bigIncrements('id');//id
            $table->string('camp_name', 30);//キャンプ場名
            $table->string('title', 50);//キャンプ場見出し
            $table->string('sub_title', 100);//キャンプ場サブ見出し
            $table->string('recommend_1', 50);//おすすめ１
            $table->string('recommend_2', 50);//おすすめ2
            $table->string('recommend_3', 50);//おすすめ3
            $table->string('state', 8);//都道府県名
            $table->string('city', 24);//市町村名
            $table->string('address', 64);//番地
            $table->string('phone', 13);//電話番号
            $table->string('latitude', 20);//latitude
            $table->string('longitude', 20);//longitude
            $table->string('access_comment', 100);//アクセス方法コメント
            $table->string('owner_pic', 128);//オーナー画像
            $table->string('owner_comment', 191);//オーナー紹介
            $table->string('plan_name', 15);//プラン名
            $table->string('plan_comment', 25);//プランコメント
            $table->string('plan_fee', 10);//金額
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information');
    }
}
