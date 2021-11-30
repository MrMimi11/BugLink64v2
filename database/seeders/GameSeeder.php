<?php

namespace Database\Seeders;

use App\Http\Controllers\HomeController;
use App\Models\Bug;
use App\Models\Category;
use App\Models\Game;
use App\Models\Speedrun;
use App\Models\User;
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
            'description' => 'The Legend of Zelda: Ocarina of Time is a video game made in 1998 for the Nintendo 64. It was the fifth Legend of Zelda video game and was the first to be in 3D. In the game, the player character Link goes on an adventure to save the kingdom of Hyrule from the evil Ganondorf. To save Hyrule, Link must fight against Ganondorf and all his minions. A special object in the game is the sacred Ocarina that Link can play after he learns the songs, causing different effects depending on the song he plays, such as moving him to certain places around Hyrule (making it much easier and faster to travel), and starting rain (for example to water plants or fill dry lakes). Thank to https://simple.wikipedia.org/wiki/The_Legend_of_Zelda:_Ocarina_of_Time',
        ]);
        $majora = Game::create([
            'name' => 'Majora\'s Mask',
            'slug' => 'majora-s-mask',
            'description' => 'The Legend of Zelda: Majora\'s Mask[a] is an action-adventure game developed and published by Nintendo for the Nintendo 64 home console. It was released worldwide in 2000 as the sixth main installment in The Legend of Zelda series and was the second to use 3D graphics, following 1998\'s The Legend of Zelda: Ocarina of Time, to which it is a direct sequel. Designed by a creative team led by Eiji Aonuma, Yoshiaki Koizumi, and Shigeru Miyamoto, Majora\'s Mask was completed in less than two years. It featured enhanced graphics and several gameplay changes from its predecessor, though it reused a number of elements and character models, which the game\'s creators called a creative decision made necessary by time constraints. 
            The story of Majora\'s Mask takes place two months after the events of Ocarina of Time. It follows Link, who on a personal quest ends up in Termina, a world parallel to Hyrule. Upon reaching Termina, Link learns that the world is endangered as the moon will fall into the world in three days.
            The gameintroduced several novel concepts, revolving around the perpetually repeating three-day cycle and the use of various masks that can transform Link into different beings.
            As the player progresses through the game, Link also learns to play numerous melodies on his Ocarina, which allow him to control the flow of time or open passages to four temple dungeons. Characteristic of the Zelda series, completion of the game involves successfully traversing through several dungeons, each of which contain a number of complex puzzles and enemies. On the Nintendo 64, Majora\'s Mask required the Expansion Pak, unlike Ocarina of Time, which provided additional memory for more refined graphics and greater flexibility in generating on-screen characters. Thank to https://en.wikipedia.org/wiki/The_Legend_of_Zelda:_Majora%27s_Mask',
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
/*            $created->bugs()
                ->createMany(Bug::factory(2)
                    ->make([
                        'game_id' => Game::all()->random()->id,
                        'user_id' => User::all()->random()->id
                    ])->toArray());*/
        }
    }
}
