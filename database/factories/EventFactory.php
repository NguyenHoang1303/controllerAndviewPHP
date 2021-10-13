<?php

namespace Database\Factories;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'brand' => 'Brand'. rand(1,100),
            'startDate' => Carbon::create(2021, rand(1, 12), rand(1, 30), rand(0, 23), rand(0, 60), 00),
            'endDate' => Carbon::create(2021, rand(1, 12), rand(1, 30), rand(0, 23), rand(0, 60), 00),
            'portfolio' => 'Portfolio'. rand(1,100),
            'ticketPrice' => rand(100000, 1000000),
            'status' => rand(1, 4),
        ];
    }
}
