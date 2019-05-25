<?php

use App\BowlingStyle;
use Illuminate\Database\Seeder;

class BowlingStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()->each(function ($data) {
            BowlingStyle::create($data);
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
            ['name' => 'Right Arm pace'],
            ['name' => 'Right arm spin'],
            ['name' => 'Left arm pace'],
            ['name' => 'Right arm spin'],
            ['name' => 'Left arm spin'],
        ]);
    }
}
