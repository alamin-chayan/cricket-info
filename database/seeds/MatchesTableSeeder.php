<?php

use App\Match;
use App\Team;
use App\Tournament;
use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::all()->each(function ($tournament) {
            $tournament->teams()->chunk(2, function ($teams) use ($tournament) {
                Match::create([
                    'tournament_id' => $tournament->id,
                    'team1_id' => $teams[0]->id,
                    'team2_id' => $teams[1]->id,
                    'start_time' => now()->addSeconds(30)
                ]);
            });
        });
    }
}
