<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the players of that team.
     */
    public function players()
    {
        return $this->belongsToMany(Player::class)
            ->as('subscription')
            ->withPivot('join', 'left');
    }

    /**
     * Get the tournaments of that team.
     */
    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class);
    }
}
