<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this ->faker->text(9),//sentence
            'character_code' => $this ->faker->text(6),
            'content' => $this ->faker->text(100),//paragraphs
            'author' => $this ->faker->name().' '.$this ->faker->lastName(),
            'created_at' => now(),
        ];
    }
}
