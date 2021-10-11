<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->text(),
            'start_date' => $this->date(),
            'end_date' => $this->faker->dateTimeBetween(),
            'discount' => $this->faker->numberBetween($min = 1, $max = 50),
            'discount_type' => $this->numberBetween($min = 1, $max = 50),
        ];
    }
}
