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
            'slug' => $this->faker->slug(),
            'uid_user' => mt_rand(1, 2),
            'description' => collect($this->faker->paragraphs(mt_rand(2, 10)))->map(function ($p) {
                return "<p>$p</p>";
            })->implode(''),
            'link' => '',
            'title' => $this->faker->sentence(mt_rand(2, 10)),
            'image' => 'https://source.unsplash.com/random',
            'video' => '-',
            'category_id' => mt_rand(1, 2),
            'tags_id' => mt_rand(1, 2),
            'subdesc' => collect($this->faker->paragraphs(mt_rand(2, 10)))->map(function ($p) {
                return "<p>$p</p>";
            })->implode(''),
            'uid_user_2' => $this->faker->sentence(mt_rand(2, 10)),
            'thumbnail' => '-',
            'captions' => $this->faker->sentence(mt_rand(2, 10)),
            'type' => 'image',
            'link_audio' => '-'
        ];
    }
}
