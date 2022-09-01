<?php

namespace Database\Factories;

use App\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
    	return [
    	    'field_1' => $this->faker->sentence,
            'field_2' => $this->faker->sentence,
            'field_3' => $this->faker->sentence,
            'field_4' => $this->faker->sentence,
            'field_5' => $this->faker->sentence,
            'field_6' => $this->faker->sentence,
            'field_7' => $this->faker->sentence,
            'field_8' => $this->faker->sentence
    	];
    }
}
