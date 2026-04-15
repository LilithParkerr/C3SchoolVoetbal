<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    use HasFactory;
    protected $fillable = ['team1_id', 'team2_id', 'team1_score', 'team2_score', 'field', 'referee_id', 'time'];

    public function team1(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2(): BelongsTo
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function referee(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referee_id');
    }

    public function goals(): HasMany
    {
        return $this->hasMany(Goal::class);
    }
}
