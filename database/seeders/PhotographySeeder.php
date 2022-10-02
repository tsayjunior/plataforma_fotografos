<?php

namespace Database\Seeders;

use App\Models\Photography;
use Illuminate\Database\Seeder;

class PhotographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photography::factory(25)->create();
    }
}
