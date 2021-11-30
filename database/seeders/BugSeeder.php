<?php

namespace Database\Seeders;

use App\Models\Bug;
use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BugSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titlebug1 = 'Isg (Infinite Sword Glitch)';
        Bug::create([
            'title' => $titlebug1,
            'slug' => Str::slug($titlebug1),
            'description' => 'Stand near an object so that it is possible to perform an action with the A button. Press R, then B to attack. About halfway through the move, press A quickly. A kind of white light will surround the sword if everything has been done correctly. This glitch can be deactivated by simply swinging the sword. Thank to https://www.puissance-zelda.com/5-Ocarina_of_Time/astuces/112-Infinite_Sword_Glitch',
            'video' => 'https://www.youtube.com/watch?v=cbnoAokg8XQ',
            'validated_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'game_id' => 1,
            'user_id' => 1
        ]);

        $titlebug2 = 'Long Jump';
        Bug::create([
            'title' => $titlebug2,
            'slug' => Str::slug($titlebug2),
            'description' => 'Stand next to a ledge and aim towards your target. Turn around 180 degrees and place a bomb down directly behind where you were facing. Turn around again and make sure your angle is still right. Wait for the bomb to explode. When it does, Link will long jump. Thank to https://www.zeldaspeedruns.com/mm/tech/long-jump',
            'video' => 'https://www.youtube.com/watch?v=7Mi_fPgdBcs',
            'validated_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'game_id' => 2,
            'user_id' => 1
        ]);
    }
}
