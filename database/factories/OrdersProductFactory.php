<?php 

namespace Database\Factories;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersProductFactory extends Factory
{
//     /**
//      * The name of the factory's corresponding model.
//      *
//      * @var string
//      */
//     protected $model = OrdersProduct::class;

//     /**
//      * Define the model's default state.
//      *
  //     * @return array
//      */
     public function definition()
     {
        return [
            'orders_id'=> Order::factory(),
            'product_id'=> Product::factory(),
            'description'=>$this->faker->text($maxNbChars = 200),
            'quantity'=> $this->faker->randomNumber(),
        ];
    }
}
