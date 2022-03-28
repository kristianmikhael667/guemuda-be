<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 10)),
            'slug' => $this->faker->slug(),
            'tags' => $this->faker->sentence(mt_rand(2, 5)),
            // 'description' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5, 10))) . '</p>',
            'description' => collect($this->faker->paragraphs(mt_rand(2, 10)))->map(function ($p) {
                return "<p>$p</p>";
            })->implode(''),
            'video' => '',
            'link' => '',
            'voice' => '',
            'avatar' => 'https://source.unsplash.com/random',
            'uid_user' =>  mt_rand(1, 2)
        ];
    }
}
