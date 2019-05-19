<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CampsTableSeeder::class);
        $this->call(Titles_TableSeeder::class);
        $this->call(PointsTableSeeder::class);
        // $this->call(Camp_PointTableSeeder::class);
        $this->call(FacilitiesTableSeeder::class);
        $this->call(Point_MastersTableSeeder::class);
        // $this->call(Facility_MastersTableSeeder::class);
        $this->call(Cg_PicturesTableSeeder::class);
        $this->call(Cg_picture_MastersTableSeeder::class);
    }
}
