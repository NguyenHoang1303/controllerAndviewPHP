<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
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
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addDay(-4),
                'updated_at' => Carbon::now()->addDay(-3),
            ],
            [
                'id' => 2,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addDay(-2),
                'updated_at' => Carbon::now()->addDay(-1),
            ],
            [
                'id' => 3,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addDay(-10),
                'updated_at' => Carbon::now()->addDay(-6),
            ],
            [
                'id' => 4,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addMonth(-4),
                'updated_at' => Carbon::now()->addDay(-3),
            ],
            [
                'id' => 5,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addMonth(-2),
                'updated_at' => Carbon::now()->addDay(-2),
            ],
            [
                'id' => 6,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addMonth(-1),
                'updated_at' => Carbon::now()->addDay(-3),
            ],
            [
                'id' => 7,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addMonth(-2),
                'updated_at' => Carbon::now()->addDay(-10),
            ],
            [
                'id' => 8,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addDay(-20),
                'updated_at' => Carbon::now()->addDay(-5),
            ],
            [
                'id' => 9,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addDay(-7),
                'updated_at' => Carbon::now()->addDay(-3),
            ],
            [
                'id' => 10,
                'name' => $faker->name,
                'address' => $faker->country,
                'created_at' => Carbon::now()->addDay(-8),
                'updated_at' => Carbon::now()->addDay(-3),
            ],

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
