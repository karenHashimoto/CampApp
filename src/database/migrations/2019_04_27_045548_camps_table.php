<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->increments('id'); //id
            $table->string('camp_img', 30)->nullable(); //キャンプimage
            $table->string('camp_name', 30); //キャンプ場名
            $table->string('cg_title', 50)->nullable(); //キャンプ場見出し
            $table->string('cg_subtitle', 100)->nullable(); //キャンプ場サブ見出し
            $table->string('reco_text1', 100)->nullable(); //おすすめ１
            $table->string('reco_text2', 100)->nullable(); //おすすめ2
            $table->string('reco_text3', 100)->nullable(); //おすすめ3
            $table->string('state', 8); //都道府県名
            $table->string('city', 24); //市町村名
            $table->string('address', 64); //番地
            $table->string('phone', 13)->nullable(); //電話番号
            $table->string('map_link', 500)->nullable(); //mapのリンク
            $table->string('access_comment', 100); //アクセス方法コメント
            $table->string('owner_name', 20)->nullable(); //オーナー名前
            $table->string('owner_pic', 128)->nullable(); //オーナー画像
            $table->string('owner_comment', 191)->nullable(); //オーナー紹介
            $table->string('plan_name', 15)->nullable(); //プラン名
            $table->string('plan_comment', 25)->nullable(); //プランコメント
            $table->string('plan_fee', 10)->nullable(); //金額
            $table->string('max_people', 5)->nullable(); //最大人数
            $table->string('reception_time', 15)->nullable(); //受付時間
            $table->string('checkout_time', 5)->nullable(); //チェックアウト時間
            $table->string('longitude', 10)->nullable(); //緯度
            $table->string('latitude', 11)->nullable(); //経度


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camps');
    }
}
