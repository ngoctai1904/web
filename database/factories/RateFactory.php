<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content'=>$this->faker(),
            'user_id'=>this->faker(),
            'room_id'=>this->faker(),
            'created_by'=>this->faker(),
            'updated'=>this->faker(),

        ];
    }
}
