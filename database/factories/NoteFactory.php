<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => fake()->words(mt_rand(3, 5), true),
            "excerpt" => fake()->words(mt_rand(5, 7), true),
            "content" => fake()->paragraph(mt_rand(3, 5))
        ];
    }
}
