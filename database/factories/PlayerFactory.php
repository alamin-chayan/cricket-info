<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\BattingStyle;
use App\BowlingStyle;
use App\FieldingPosition;
use App\Player;
use App\PlayingRole;
use Faker\Generator as Faker;

$factory->define(Player::class, function (Faker $faker) {
    return [
        'name' => $faker->name('male'),
        'bio' => $faker->realText(200, 2),
        'date_of_birth' => mt_rand(1979, 2000) . '-' .
            sprintf('%02d', mt_rand(1, 12)) . '-' .
            sprintf('%02d', mt_rand(1, 28)),
        'playing_role_id' => $faker->randomElement(PlayingRole::pluck('id')->toArray()),
        'batting_style_id' => $faker->randomElement(BattingStyle::pluck('id')->toArray()),
        'bowling_style_id' => $faker->randomElement(BowlingStyle::pluck('id')->toArray()),
        'fielding_position_id' => $faker->randomElement(FieldingPosition::fielder()->pluck('id')->toArray())
    ];
});

$factory->state(Player::class, 'wicketkeeper', [
    'playing_role_id' => function () {
        return PlayingRole::wicketkeeper()->pluck('id')->first();
    },
    'bowling_style_id' => null,
    'fielding_position_id' => function () {
        return FieldingPosition::wicketkeeper()->pluck('id')->first();
    },
]);

$factory->state(Player::class, 'batsman', function ($faker) {
    return [
        'playing_role_id' => $faker->randomElement(PlayingRole::batsman()->pluck('id')->toArray()),
        'bowling_style_id' => null,
    ];
});

$factory->state(Player::class, 'allrounder', function ($faker) {
    return [
        'playing_role_id' => $faker->randomElement(PlayingRole::allrounder()->pluck('id')->toArray()),
    ];
});

$factory->state(Player::class, 'bowler', function ($faker) {
    return [
        'playing_role_id' => $faker->randomElement(PlayingRole::bowler()->pluck('id')->toArray()),
    ];
});
