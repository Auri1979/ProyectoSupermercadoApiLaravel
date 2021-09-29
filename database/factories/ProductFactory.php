<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->name(),
            'code'=> $this->faker->sha1('f08e7f04ca1a413807ebc47551a40a20a0b4de5c'),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            'weight' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 20, $max = 8000),
            'description'=> $this->faker->text($maxNbChars = 200),     
            'image' => $this->faker->Url($width = 640, $height = 480),
            'id_category' => Category::factory(),
            'stock' => $this->faker->numberBetween($min = 0, $max = 100),
            
        ];
    }
}
