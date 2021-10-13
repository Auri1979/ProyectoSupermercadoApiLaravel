<?php

namespace Database\Factories;

use App\Models\OrdersProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrdersProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'orders_id'=> OrdersProduct::factory(),
            'product_id'=> OrdersProduct::factory(),
            'description'=>$this->faker->text($maxNbChars = 200),
            'quantity'=>$this->randomNumber($nbDigits = NULL, $strict = false),
        ];
    }
}
