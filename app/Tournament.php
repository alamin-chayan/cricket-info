<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Get the teams of that tournament.
     */
    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
