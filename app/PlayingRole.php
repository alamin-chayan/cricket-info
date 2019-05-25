<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PlayingRole extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the players of a particular playing role.
     */
    public function players()
    {
        return $this->hasMany(Player::class);
    }

    /**
     * Scope a query to only include Wicket keeper.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWicketkeeper(Builder $query)
    {
        return $query->whereName('Wicketkeeper batsman');
    }

    /**
     * Scope a query to only include Batsman.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBatsman(Builder $query)
    {
        return $query->whereIn('name', ['Batsman']);
    }

    /**
     * Scope a query to only include Allrounder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAllrounder(Builder $query)
    {
        return $query->whereIn('name', ['Batting allrounder', 'Bowling allrounder']);
    }

    /**
     * Scope a query to only include Bowlers.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBowler(Builder $query)
    {
        return $query->whereIn('name', ['Bowler']);
    }
}
