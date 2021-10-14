<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id' => 1,
                'customerId' => 1,
                'created_at' => Carbon::now()->addDay(-4),
                'updated_at' => Carbon::now()->addDay(-3),
            ],
            [
                'id' => 2,
                'customerId' => 2,
                'created_at' => Carbon::now()->addDay(-3),
                'updated_at' => Carbon::now()->addDay(-1),
            ],
            [
                'id' => 3,
                'customerId' => 3,
                'created_at' => Carbon::now()->addDay(-4),
                'updated_at' => Carbon::now()->addDay(-3),
            ],
            [
                'id' => 4,
                'customerId' => 4,
                'created_at' => Carbon::now()->addDay(-2),
                'updated_at' => Carbon::now()->addDay(-1),
            ],
            [
                'id' => 5,
                'customerId' => 5,
                'created_at' => Carbon::now()->addDay(-3),
                'updated_at' => Carbon::now()->addDay(-2),
            ],


        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
