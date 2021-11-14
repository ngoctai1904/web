<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//class la doi tuong
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //function phuong thuc
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text($maxNbChars = 255),  
            'status' => $this ->faker->numberBetween($min = 0, $max = 1),
        ];
    }

}
