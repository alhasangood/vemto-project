<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
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
            'name' => $this->faker->name,
            'descripton' => $this->faker->text(255),
            'product_code' => $this->faker->text(255),
            'qty' => $this->faker->randomNumber(0),
            'product_price' => $this->faker->randomNumber(2),
            'product_image' => $this->faker->text(255),
            'product_year' => $this->faker->date,
            'status' => $this->faker->randomNumber(0),
        ];
    }
}
