<?php

use Illuminate\Database\Seeder;

class Point_MastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('point_masters')->insert([
            [
                'id' => '1',
                'path' => 'huge.png',
                'point_comment' => '広大な敷地',
            ],
            [
                'id' => '2',
                'path' => 'star.png',
                'point_comment' => '満点の星空',
            ],
            [
                'id' => '3',
                'path' => 'dog.png',
                'point_comment' => 'ワンコOK',
            ],
            [
                'id' => '4',
                'path' => 'hot_spring.png',
                'point_comment' => '温泉有り！',
            ],
            [
                'id' => '5',
                'path' => 'sunset.png',
                'point_comment' => '夕日が綺麗',
            ],
            [
                'id' => '6',
                'path' => 'night_view.png',
                'point_comment' => '夜景が綺麗',
            ],
            [
                'id' => '7',
                'path' => 'access.png',
                'point_comment' => '良アクセス',
            ],
            [
                'id' => '8',
                'path' => 'luxury.png',
                'point_comment' => '豪華設備！',
            ],
            [
                'id' => '9',
                'path' => 'sea.png',
                'point_comment' => '海の近く！',
            ],
            [
                'id' => '10',
                'path' => 'river.png',
                'point_comment' => '川で遊べる',
            ],


        ]);
    }
}
