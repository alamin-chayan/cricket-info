<?php

use App\Team;
use App\Tournament;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::all()->each(function ($tournament) {
            $tournament->teams()->attach(factory(Team::class, 8)->create());
        });
    }
}
