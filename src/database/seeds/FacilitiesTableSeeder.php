<?php

use Illuminate\Database\Seeder;

class FacilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facilities')->insert([
            ['id' => '1',
            'path' => 'wifi.png',
            'facility_comment' => 'wi-fi',
            ],
            ['id' => '2',
            'path' => 'card.png',
            'facility_comment' => 'カードOK',
            ],
            ['id' => '3',
            'path' => 'garbage.png',
            'facility_comment' => 'ゴミ捨て場',
            ],
            ['id' => '4',
            'path' => 'powder_room.png',
            'facility_comment' => '化粧室',
            ],
            ['id' => '5',
            'path' => 'shower_toilet.png',
            'facility_comment' => '温水トイレ',
            ],
            ['id' => '6',
            'path' => 'toilet.png',
            'facility_comment' => '洋式トイレ',
            ],
            ['id' => '7',
            'path' => 'jp_toilet.png',
            'facility_comment' => '和式トイレ',
            ],
            ['id' => '8',
            'path' => 'hot_spring.png',
            'facility_comment' => '温泉',
            ],
            ['id' => '9',
            'path' => 'shower.png',
            'facility_comment' => 'シャワー',
            ],
            ['id' => '10',
            'path' => 'manager.png',
            'facility_comment' => '管理人在中',
            ],
            ['id' => '11',
            'path' => 'kitchen.png',
            'facility_comment' => '炊事棟',
            ],
            ['id' => '12',
            'path' => 'laundry.png',
            'facility_comment' => '洗濯機',
            ],
            ['id' => '13',
            'path' => 'shop.png',
            'facility_comment' => '売店',
            ],
            ['id' => '14',
            'path' => 'restaurant.png',
            'facility_comment' => 'レストラン',
            ],
            ['id' => '15',
            'path' => 'car.png',
            'facility_comment' => '車乗り入れ',
            ],
            ['id' => '16',
            'path' => 'universal.png',
            'facility_comment' => 'みんなOK',
            ],
            ['id' => '17',
            'path' => 'amenity.png',
            'facility_comment' => 'アメニティ',
            ],
            ['id' => '18',
            'path' => 'pet.png',
            'facility_comment' => 'ペット可',
            ],
            ['id' => '19',
            'path' => 'campfire.png',
            'facility_comment' => '直火OK',
            ],
            ['id' => '20',
            'path' => 'fireworks.png',
            'facility_comment' => '花火OK',
            ],
            
            

            ]);
    }
}
