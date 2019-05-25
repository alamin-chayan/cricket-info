<?php

use App\BattingStyle;
use Illuminate\Database\Seeder;

class BattingStylesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->data()->each(function ($data) {
            BattingStyle::create($data);
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
            ['name' => 'Right-hand bat'],
            ['name' => 'Left-hand bat']
        ]);
    }

}
