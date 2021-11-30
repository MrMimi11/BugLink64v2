<?php

namespace Database\Factories;

use App\Models\Bug;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BugFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bug::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->numerify('bug-####');
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'description' => $this->faker->paragraph(3),
            'video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'validated_at' => $this->faker->randomElement([null, now()])
        ];
    }
}
