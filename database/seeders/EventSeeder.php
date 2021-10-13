<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->delete();
        for ($i = 0; $i < 100; $i++) {
            $event = new Event();
            $event->name = "Event $i";
            $event->brand = "Brand $i";
            $event->startDate = Carbon::create(2021, rand(1,12), rand(1, 30), rand(0, 23), rand(0, 60), 00);
            $event->endDate = Carbon::create(2021, rand(1,12), rand(1, 30), rand(0, 23), rand(0, 60), 00);
            $event->portfolio = "Portfolio $i";
            $event->ticketPrice = rand(100000, 1000000);
            $event->status = rand(1,4);
            $event->save();
        }
    }
}
