<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BattingStyle extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the players of a particular batting style.
     */
    public function players()
    {
        return $this->hasMany(Player::class);
    }

}
