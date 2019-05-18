<?php

use Illuminate\Database\Seeder;

class TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            ['id' => '1',
            'top_title' => 't111opt',
            'top_subtitle' => '1111topsub',
            'top_img' => '111topimg',
            ],
            ['id' => '2',
            'top_title' => '222topti',
            'top_subtitle' => '222topsub',
            'top_img' => '222topimg',
            ],
            ['id' => '3',
            'top_title' => '333topt',
            'top_subtitle' => '333topsub',
            'top_img' => '333topimg',
            ],
            

            ]);
    }
}
