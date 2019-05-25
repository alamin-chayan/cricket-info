<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bio',
        'date_of_birth',
        'playing_role_id',
        'batting_style_id',
        'bowling_style_id',
        'fielding_position_id'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'date_of_birth',
    ];

    /**
     * Get the player's age.
     *
     * @return string
     */
    public function getAgeAttribute()
    {
        return $this->date_of_birth
            ? $this->date_of_birth->age
            : 'N/A';
    }

    /**
     * Get the Playing Role of that player.
     */
    public function playingRole()
    {
        return $this->belongsTo(PlayingRole::class);
    }

    /**
     * Get the Batting Style of that player.
     */
    public function battingStyle()
    {
        return $this->belongsTo(BattingStyle::class);
    }

    /**
     * Get the Bowling Style of that player.
     */
    public function bowlingStyle()
    {
        return $this->belongsTo(BowlingStyle::class);
    }

    /**
     * Get the Fielding Position of that player.
     */
    public function fieldingPosition()
    {
        return $this->belongsTo(FieldingPosition::class);
    }

    /**
     * Get the teams of that player.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class)
            ->as('subscription')
            ->withPivot('join', 'left');
    }
}
