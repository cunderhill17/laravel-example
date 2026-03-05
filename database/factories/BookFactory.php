<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //newer laravel versions use fake() instead of $this->faker 
            'title' => $this->faker->name,
            'author_id' => Author::inRandomOrder()->first()->id,
            'publisher_id' => null,
        ];
    }
}
