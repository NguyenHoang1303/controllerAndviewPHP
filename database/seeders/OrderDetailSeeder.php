<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
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
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderId' => 1,
                'productId' => 1,
                'quantity' => 2,
                'amount' => 70000,

            ],
            [
                'orderId' => 2,
                'productId' => 2,
                'quantity' => 4,
                'amount' => 140000,

            ],
            [
                'orderId' => 3,
                'productId' => 3,
                'quantity' => 2,
                'amount' => 60000,

            ],
            [
                'orderId' => 4,
                'productId' => 4,
                'quantity' => 1,
                'amount' => 30000,

            ],
            [
                'orderId' => 5,
                'productId' => 5,
                'quantity' => 5,
                'amount' => 120000,
            ],


        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
