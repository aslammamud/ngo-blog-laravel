<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first(),
            'category_id' => Category::inRandomOrder()->first(),
            'title' => $this->faker->word,
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->word,
            'status' => $this->faker->randomElement(["PUBLISHED","DRAFT"]),
            'published_at' => $this->faker->date(),
            'featured' => $this->faker->boolean,
        ];
    }
}
