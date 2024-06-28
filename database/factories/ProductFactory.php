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
            'imgUrl' => fake()->randomElement(['https://underarmour.scene7.com/is/image/Underarmour/3025060-001_DEFAULT?rp=standard-30pad|pdpMainDesktop&scl=1&fmt=jpg&qlt=85&resMode=sharp2&cache=on,on&bgc=f0f0f0&wid=566&hei=708&size=536,688', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHW63PXCX9e7_FQLuPw0OqQmNPC5nhRcLH0Q&s', 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1696624040-813PcM656QL.jpg?crop=1xw:1.00xh;center,top&resize=980:*', 'https://assets.adidas.com/images/w_600,f_auto,q_auto/505b6a0aae264129bc4cae92011007b9_9366/Daily_3.0_Shoes_White_GX1752_01_standard.jpg', 'https://assets.adidas.com/images/w_600,f_auto,q_auto/4948095c2bd04bbcb5c2af1601154a02_9366/Stan_Smith_Lux_Shoes_White_HP2201_HM1.jpg']),
            'name' => fake()->word(),
            'description' => fake()->sentence(),
            'price' =>fake()->numberBetween(5000,10000)
        ];
    }
}
