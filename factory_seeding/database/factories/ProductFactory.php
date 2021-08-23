<?php

namespace Database\Factories;

use App\Models\Product;
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
            "pro_title"=>$this->faker->name(),
            "price"=>$this->faker->numberBetween(200,999),
            "seller_name"=>$this->faker->name,
            "seller_contact"=>$this->faker->phoneNumber(),
            "image"=>$this->faker->imageurl(649,480),
            "description"=>$this->faker->text(300),
            "address"=>$this->faker->address(),
            "city"=>$this->faker->city,
            "category_id" =>$this->faker->numberBetween(1,10)
        ];
    }
}
