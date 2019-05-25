<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tournament_id',
        'team1_id',
        'team2_id',
        'winner_id',
        'status',
        'start_time',
    ];

    /**
     * The model's default attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 'upcoming'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['start_time'];

    /**
     * Get the tournament of the match.
     */
    public function tournament()
    {
        return $this->belongsTo(Tournament::class, 'tournament_id');
    }

    /**
     * Get the team1 of the match.
     */
    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    /**
     * Get the team1 of the match.
     */
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    /**
     * Get the winner of the match.
     */
    public function winner()
    {
        return $this->belongsTo(Team::class, 'winner_id');
    }
}
