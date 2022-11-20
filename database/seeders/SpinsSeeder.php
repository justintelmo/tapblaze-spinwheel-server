<?php

namespace Database\Seeders;

use Database\Factories\SpinsFactory;
use Illuminate\Database\Seeder;

class SpinsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SpinsFactory::factory()->count(250)->create();
    }
}
