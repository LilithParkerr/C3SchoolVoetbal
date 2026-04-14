<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    protected $fillable = ['name', 'points', 'creator_id'];

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function players(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function homeGames(): HasMany
    {
        return $this->hasMany(Game::class, 'team1_id');
    }

    public function awayGames(): HasMany
    {
        return $this->hasMany(Game::class, 'team2_id');
    }

}
