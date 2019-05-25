<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BowlingStyle extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the players of a particular bowling style.
     */
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
