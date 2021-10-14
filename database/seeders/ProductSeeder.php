<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
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
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'cơm rang thập cẩm',
                'price' => 35000,
                'created_at' => Carbon::now()->addYear(-1),
                'updated_at' => Carbon::now()->addMonth(-3),
            ],
            [
                'id' => 2,
                'name' => 'cơm rang dưa bò',
                'price' => 35000,
                'created_at' => Carbon::now()->addYear(-1),
                'updated_at' => Carbon::now()->addMonth(-3),
            ],
            [
                'id' => 3,
                'name' => 'phở bò',
                'price' => 30000,
                'created_at' => Carbon::now()->addYear(-1),
                'updated_at' => Carbon::now()->addMonth(-3),
            ],
            [
                'id' => 4,
                'name' => 'phở gà',
                'price' => 30000,
                'created_at' => Carbon::now()->addYear(-1),
                'updated_at' => Carbon::now()->addMonth(-3),
            ],
            [
                'id' => 5,
                'name' => 'mì xào bò',
                'price' => 30000,
                'created_at' => Carbon::now()->addYear(-1),
                'updated_at' => Carbon::now()->addMonth(-3),
            ],


        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');    }
}
