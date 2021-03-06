<?php

namespace Database\Factories;

use App\Models\Speedrun;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SpeedrunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Speedrun::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->numerify('speedrun-####');
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'video' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'
        ];
    }
}
