<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name,
            'email'=> $this->faker->email(),
            'email-verified-at'=>$this->faker->dateTime,
            'password'=> $this->faker->password
        ];
    }
}
