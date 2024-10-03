<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    protected $model = product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
         'descripcion' => $this->faker->sentence,
        'price'  => $this->faker->randomFloat(2,2,10),
        'stok' => $this->faker->numberBetween(1,100),
        ];
    }
}
