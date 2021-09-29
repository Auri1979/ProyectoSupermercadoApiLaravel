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
            'type_offer'=> $this->faker->text($maxNbChars = 200),
            'name_offer' => $this->faker->name(),
            'deadline' => $this->faker->date(),
        ];
    }
}
