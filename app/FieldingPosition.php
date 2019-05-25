<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class FieldingPosition extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the players of a particular fielding position.
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
        return $query->whereName('Wicket keeper');
    }

    /**
     * Scope a query to only include Fielders.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFielder(Builder $query)
    {
        return $query->where('name', '!=', 'Wicket keeper');
    }
}
