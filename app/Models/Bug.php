<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bug extends Model
{
    use HasFactory;

    protected $fillable = [
      'title', 'slug', 'description', 'video', 'game_id'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function game()
    {
        return $this->BelongsTo(Game::class);
    }
}
