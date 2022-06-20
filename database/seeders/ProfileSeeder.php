<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::factory()->count(20)->create();
        // factory(\App\Vehicle::class, 100)->create();
    }
}
