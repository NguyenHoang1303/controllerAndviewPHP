<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('events')->truncate();
        Event::factory()
            ->count(100)
            ->create();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
