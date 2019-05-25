<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TournamentsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(PlayingRolesTableSeeder::class);
        $this->call(BattingStylesTableSeeder::class);
        $this->call(BowlingStylesTableSeeder::class);
        $this->call(FieldingPositionsTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
    }
}
