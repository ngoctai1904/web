<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
//use khai bao thu vien
use App\Models\Author;
use App\Models\Category;
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Gán biến $author = với bảng tất cả trong bảng Authors
        $author = Author::all();
        $categories = Category::all();
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'thumbnail' => $this->faker->imageUrl($width = 256, $height = 192),
            'price' => $this ->faker->numberBetween($min = 50, $max=200),
            'discount' => $this ->faker->numberBetween($min = 10, $max = 49),
            'amount' => $this ->faker->numberBetween($min = 0, $max = 1000),
            'view' => $this ->faker->numberBetween($min = 0, $max = 50),
            'overview' =>$this ->faker->randomHtml(2,3),
            'since' =>$this ->faker->year(),
            //lay radom trong bien $author 
            'author_id' => $author->random(),
            'category_id' => $categories->random()
        ];
    }
}
