<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    //donner accès aux colonnes de la base de données
    protected $fillable = [
        'title', 'slug', 'description', 'video', 'game_id'
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
}
