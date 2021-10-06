<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductCategory;
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
            'code'=> $this->faker->numberBetween($min = 1000, $max = 10000),
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 50),
            'weight' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 20, $max = 8000),
            'description'=> $this->faker->text($maxNbChars = 200),     
            'image' => $this->faker->image($dir = 'C:\laragon\www\ProyectoSupermercadoApiLaravel\image', $width = 640, $height = 480),            
            'id_category' => ProductCategory::factory(),
            'stock' => $this->faker->numberBetween($min = 0, $max = 100),
            
        ];
    }
}
