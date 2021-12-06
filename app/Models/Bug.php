<?php

namespace App\Models;

use Database\Factories\BugFactory;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Bug
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $video
 * @property int|null $verification
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $game_id
 * @property-read Collection|Category[] $categories
 * @property-read int|null $categories_count
 * @property-read Game $game
 * @method static BugFactory factory(...$parameters)
 * @method static Builder|Bug newModelQuery()
 * @method static Builder|Bug newQuery()
 * @method static Builder|Bug query()
 * @method static Builder|Bug whereCreatedAt($value)
 * @method static Builder|Bug whereDescription($value)
 * @method static Builder|Bug whereGameId($value)
 * @method static Builder|Bug whereId($value)
 * @method static Builder|Bug whereSlug($value)
 * @method static Builder|Bug whereTitle($value)
 * @method static Builder|Bug whereUpdatedAt($value)
 * @method static Builder|Bug whereVerification($value)
 * @method static Builder|Bug whereVideo($value)
 * @mixin Eloquent
 */
class Bug extends Model
{
    use HasFactory;

    //donner accès aux colonnes de la base de données
    protected $fillable = [
        'title', 'slug', 'description', 'video', 'game_id', 'validated_at', 'user_id'
    ];

    //relation des bugs avec les catégories et ça retourne les plusieurs relations (les plusieurs catégories) qu'il y a dans le model Category
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    //relation des bugs avec le jeu et ça retourne la relation qu'il y a dans le model Game donc savoir à quel bug appartient le jeu
    public function game()
    {
        return $this->BelongsTo(Game::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault([
            'pseudo' => 'Utilisateur bannis',
            'email' => 'Utilisateur bannis'
        ]);
    }

    public function scopeActive(Builder $query)
    {
        return $query->whereNotNull('validated_at');
    }
}
