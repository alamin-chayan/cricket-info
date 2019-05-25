<?php

use App\PlayingRole;
use Illuminate\Database\Seeder;

class PlayingRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()->each(function ($data) {
            PlayingRole::create($data);
        });
    }

    /**
     * Supply data for seeding
     *
     * @return \Illuminate\Support\Collection
     */
    private function data()
    {
        return collect([
            ['name' => 'Wicketkeeper batsman'],
            ['name' => 'Batsman'],
            ['name' => 'Batting allrounder'],
            ['name' => 'Bowling allrounder'],
            ['name' => 'Bowler'],
        ]);
    }
}
