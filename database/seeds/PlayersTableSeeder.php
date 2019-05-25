<?php

use App\Player;
use App\Team;
use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::all()->each(function ($team) {
            $team->players()->attach(factory(Player::class)->states('wicketkeeper')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('batsman')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('batsman')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('batsman')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('batsman')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('allrounder')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('allrounder')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('bowler')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('bowler')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('bowler')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
            $team->players()->attach(factory(Player::class)->states('bowler')->create(), [
                'join' => now()->subYears(2)->addWeeks(rand(1, 52))->format('Y-m-d')
            ]);
        });
    }
}
