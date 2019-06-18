<?php

use Illuminate\Database\Seeder;

class Titles_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(TableSeeder::class);
        DB::table('titles')->insert([
            [
                'id' => '1',
                'top_title' => 'キャンシェルジュのおすすめのキャンプ場',
                'top_subtitle' => '女性向けキャンプコミュニティ『キャンジョ』でも話題。はじめてでも安心して楽しめるキャンプ場。',
                'top_img' => 'hoge.jpeg'
            ],
            [
                'id' => '2',
                'top_title' => '初心者安心快適キャンプ場。',
                'top_subtitle' => '設備の整ったキャンプ場。',
                'top_img' => 'hoge.jpg'
            ],
            [
                'id' => '3',
                'top_title' => '海の見えるキャンプ場',
                'top_subtitle' => '夕日が綺麗なキャンプ場です',
                'top_img' => 'hoge.jpg'
            ]
        ]);
    }
}
