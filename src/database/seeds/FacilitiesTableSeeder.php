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
            'camp_id' => '1',
            'facility_id'
            ],
            ['id' => '2',
            'camp_id' => '1',
            'facility_id'
            ],
            ['id' => '3',
            'path' => 'jp_toilet.png',
            ],
            ['id' => '4',
            'path' => 'toilet.png',
            ],
            ['id' => '5',
            'path' => 'shower_toilet.png',
            ],
            ['id' => '6',
            'path' => 'powder_room.png',
            ],
            ['id' => '7',
            'path' => 'hotspring.png',
            ],
            ['id' => '8',
            'path' => 'maneger.png',
            ],
            ['id' => '9',
            'path' => 'maneger.png',
            ],
            ['id' => '10',
            'path' => 'kitchen.png',
            ],
            ['id' => '11',
            'path' => 'shop.png',
            ],
            ['id' => '12',
            'path' => 'pet.png',
            ],
            ['id' => '13',
            'path' => 'campfire.png',
            ],
            ['id' => '14',
            'path' => 'wifi.png',
            ],
            ['id' => '15',
            'path' => 'restaurant.png',
            ],
            ['id' => '16',
            'path' => 'fireworks.png',
            ],
            ['id' => '17',
            'path' => 'car.png',
            ],
            ['id' => '18',
            'path' => 'laundry.png',
            ],
            ['id' => '19',
            'path' => 'ud.png',
            ],
            ['id' => '20',
            'path' => 'card.png',
            ],
            ['id' => '21',
            'path' => 'amenity.png',
            ],
            
            

            ]);
    }
}
