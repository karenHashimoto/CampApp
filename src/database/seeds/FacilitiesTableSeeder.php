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
            ['id' => '1',
            'camp_id' => '1',
            'facility_id'
            ],
            ['id' => '2',
            'path' => 'jp_toilet.png',
            ],
            ['id' => '3',
            'path' => 'toilet.png',
            ],
            ['id' => '4',
            'path' => 'shower_toilet.png',
            ],
            ['id' => '5',
            'path' => 'powder_room.png',
            ],
            ['id' => '6',
            'path' => 'hotspring.png',
            ],
            ['id' => '7',
            'path' => 'maneger.png',
            ],
            ['id' => '8',
            'path' => 'maneger.png',
            ],
            ['id' => '9',
            'path' => 'kitchen.png',
            ],
            ['id' => '10',
            'path' => 'shop.png',
            ],
            ['id' => '11',
            'path' => 'pet.png',
            ],
            ['id' => '12',
            'path' => 'campfire.png',
            ],
            ['id' => '13',
            'path' => 'wifi.png',
            ],
            ['id' => '14',
            'path' => 'restaurant.png',
            ],
            ['id' => '15',
            'path' => 'fireworks.png',
            ],
            ['id' => '16',
            'path' => 'car.png',
            ],
            ['id' => '17',
            'path' => 'laundry.png',
            ],
            ['id' => '18',
            'path' => 'ud.png',
            ],
            ['id' => '19',
            'path' => 'card.png',
            ],
            ['id' => '20',
            'path' => 'amenity.png',
            ],
            
            

            ]);
    }
}
