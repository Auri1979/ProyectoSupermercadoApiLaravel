<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
                return [
                    'amount'=> $this->faker->numberBetween($min = 1, $max = 20),
                    'address'=> $this->faker->address(),
                    'email'=> $this->faker->email(),
                    'description'=> $this->faker->text($maxNbChars = 200),
                    'status'=> $this->faker->words($nb = 4, $asText = false),   
                    'total'=> $this->faker->numberBetween($min = 1, $max = 200),
                ];
   }
}
