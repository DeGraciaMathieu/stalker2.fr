<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Paper::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'user_id' => function () {
            return App\User::inRandomOrder()->first()->id;
        },         
        'category_id' => function () {
            return App\Models\Category::inRandomOrder()->first()->id;
        },        
        'slug' => $faker->slug,
        'content' => $faker->name,
        'highlight' => $faker->text,
        'online' => true,
        'published_at' => $faker->dateTime('now'),
    ];
});

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
