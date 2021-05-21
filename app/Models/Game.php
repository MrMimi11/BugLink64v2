<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'image', 'description'
    ];

    public function bugs()
    {
        return $this->hasMany(Bug::class)->latest('updated_at');
    }

    public function speedruns()
    {
        return $this->hasMany(Speedrun::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
