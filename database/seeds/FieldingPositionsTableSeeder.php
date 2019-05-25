<?php

use App\FieldingPosition;
use Illuminate\Database\Seeder;

class FieldingPositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()->each(function ($data) {
            FieldingPosition::create($data);
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
            ['name' => 'Wicket keeper'],
            ['name' => 'Slip'],
            ['name' => 'Cover'],
            ['name' => 'Square'],
            ['name' => 'Silly point'],
            ['name' => 'Mid-wicket'],
            ['name' => 'Fine leg'],
            ['name' => 'Mid positions'],
            ['name' => 'Long positions'],
            ['name' => 'Gully'],
            ['name' => 'Third Man'],
        ]);
    }
}
