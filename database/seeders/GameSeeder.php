<?php

namespace Database\Seeders;

use App\Http\Controllers\HomeController;
use App\Models\Bug;
use App\Models\Category;
use App\Models\Game;
use App\Models\Speedrun;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $ocarina = Game::create([
            'name' => 'Ocarina of Time',
            'slug' => 'ocarina-of-time',
            'description' => 'lorem',
        ]);
        $majora = Game::create([
            'name' => 'Majora\'s Mask',
            'slug' => 'majora-s-mask',
            'description' => 'lorem',
        ]);

        $categories = [
            'All' => [1, 2],
            'Any%' => [1, 2],
            '100%' => [1, 2],
            'Glitchless' => [1, 2],
            'All Dungeons' => [1, 2],

            'GSR' => [1],
            'MST' => [1],
            'Defeat Ganon' => [1],
            'No Wrong Warp' => [1],

            'All Masks' => [2],
            'Defeat Majora' => [2],
            'AFR' => [2],
            'TDC' => [2],
            'Monthlies' => [2],
            'Others' => [1, 2],
        ];

        foreach ($categories as $key => $category) {
            $created = Category::create([
                'name' => $key,
                'slug' => Str::slug($key)
            ]);
            $created->games()->sync($category);
            $created->bugs()
                ->createMany(Bug::factory(5)
                    ->make([
                        'game_id' => Game::all()->random()->id,
                    ])->toArray());
        }
    }
}
