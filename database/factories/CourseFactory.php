<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Instructor;
use App\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    $instructor = Instructor::all()->pluck('id')->toArray();
    return [
        'name' => $faker->word,
        'description' => $faker->sentence,
        'start' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'end' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'tags' =>$faker->word,
        'instructor_id' =>$faker->randomElement($instructor)
    ];
});
