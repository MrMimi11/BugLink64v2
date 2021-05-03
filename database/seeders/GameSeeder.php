<?php

namespace Database\Seeders;

use App\Models\Bug;
use App\Models\Game;
use App\Models\Speedrun;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::factory(10)
            ->has(Bug::factory(10))
            ->has(Speedrun::factory(10))
            ->create();
    }
}
