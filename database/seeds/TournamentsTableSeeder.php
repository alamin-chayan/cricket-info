<?php

use App\Tournament;
use Illuminate\Database\Seeder;

class TournamentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tournament::class)->create([
            'name' => 'Insider Premier League',
        ]);
    }
}
