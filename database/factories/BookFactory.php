<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'image' => "https://placekitten.com/" . rand(200, 400) . "/" . rand(400, 800),
            'author' => $this->faker->name(),
            'bio' => $this->faker->realText(200, 2),
            'writer_id' => rand(1, 500)
        ];
    }
}
