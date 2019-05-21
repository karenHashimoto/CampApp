<?php

use Illuminate\Database\Seeder;

class PointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('points')->insert([
            ['id' => '1',
            'camp_id' => '1',
            'point_id' => '1',
            ],
            ['id' => '2',
            'camp_id' => '1',
            'point_id' => '3',
            ],
            ['id' => '3',
            'camp_id' => '1',
            'point_id' => '4',
            ],

            ['id' => '4',
            'camp_id' => '2',
            'point_id' => '5',
            ],
            ['id' => '5',
            'camp_id' => '2',
            'point_id' => '7',
            ],
            ['id' => '6',
            'camp_id' => '2',
            'point_id' => '8',
            ],

            ['id' => '7',
            'camp_id' => '3',
            'point_id' => '2',
            ],
            ['id' => '8',
            'camp_id' => '3',
            'point_id' => '4',
            ],
            ['id' => '9',
            'camp_id' => '3',
            'point_id' => '7',
            ],

            ['id' => '10',
            'camp_id' => '4',
            'point_id' => '1',
            ],
            ['id' => '11',
            'camp_id' => '4',
            'point_id' => '2',
            ],
            ['id' => '12',
            'camp_id' => '4',
            'point_id' => '3',
            ],

            ['id' => '13',
            'camp_id' => '5',
            'point_id' => '4',
            ],
            ['id' => '14',
            'camp_id' => '5',
            'point_id' => '5',
            ],
            ['id' => '15',
            'camp_id' => '5',
            'point_id' => '6',
            ],

            ['id' => '16',
            'camp_id' => '6',
            'point_id' => '7',
            ],
            ['id' => '17',
            'camp_id' => '6',
            'point_id' => '8',
            ],
            ['id' => '18',
            'camp_id' => '6',
            'point_id' => '9',
            ],

            ['id' => '19',
            'camp_id' => '7',
            'point_id' => '1',
            ],
            ['id' => '20',
            'camp_id' => '7',
            'point_id' => '5',
            ],
            ['id' => '21',
            'camp_id' => '7',
            'point_id' => '9',
            ],

            ['id' => '22',
            'camp_id' => '8',
            'point_id' => '2',
            ],
            ['id' => '23',
            'camp_id' => '8',
            'point_id' => '4',
            ],
            ['id' => '24',
            'camp_id' => '8',
            'point_id' => '6',
            ],

            ['id' => '25',
            'camp_id' => '9',
            'point_id' => '7',
            ],
            ['id' => '26',
            'camp_id' => '9',
            'point_id' => '8',
            ],
            ['id' => '27',
            'camp_id' => '9',
            'point_id' => '9',
            ],

            ]);
    }
}
