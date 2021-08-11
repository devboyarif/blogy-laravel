<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = rand(1, 600);
        $image = 'https://picsum.photos/id/' . $id . '/700/600';

        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'title' => $this->faker->name(3),
            'slug' => Str::slug($this->faker->name(3)),
            'thumbnail' => $image,
            'short_description' => $this->faker->sentence(3),
            'long_description' => $this->faker->paragraph(100),
            'created_by' => User::inRandomOrder()->first()->id,
        ];
    }
}
