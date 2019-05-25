<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scorecard extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'details',
        'match_id',
        'innings',
        'over',
        'boll',
        'bowler_id',
        'batsman_id',
        'run'
    ];

    /**
     * Get the match of the scorecard.
     */
    public function match()
    {
        return $this->belongsTo(Match::class);
    }

    /**
     * Get the match of the scorecard.
     */
    public function bowler()
    {
        return $this->belongsTo(Player::class, 'bowler_id');
    }

    /**
     * Get the match of the scorecard.
     */
    public function batsman()
    {
        return $this->belongsTo(Player::class, 'batsman_id');
    }
}
