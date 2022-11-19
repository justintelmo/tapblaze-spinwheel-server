<?php

namespace Database\Seeders;

use App\Models\WheelItem;
use Illuminate\Database\Seeder;

class WheelItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WheelItem::factory()->count(8)->create();
    }
}
