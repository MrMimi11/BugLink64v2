<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Speedrun
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $video
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $game_id
 * @method static \Database\Factories\SpeedrunFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun query()
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun whereGameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Speedrun whereVideo($value)
 * @mixin \Eloquent
 */
class Speedrun extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'slug', 'video'
    ];
}
