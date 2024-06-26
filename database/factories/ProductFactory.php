<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imgUrl' => fake()->randomElement(['https://underarmour.scene7.com/is/image/Underarmour/3025060-001_DEFAULT?rp=standard-30pad|pdpMainDesktop&scl=1&fmt=jpg&qlt=85&resMode=sharp2&cache=on,on&bgc=f0f0f0&wid=566&hei=708&size=536,688', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHW63PXCX9e7_FQLuPw0OqQmNPC5nhRcLH0Q&s', 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1696624040-813PcM656QL.jpg?crop=1xw:1.00xh;center,top&resize=980:*']),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' =>fake()->numberBetween(5000,10000)
        ];
    }
}
