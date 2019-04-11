<?php

use Faker\Generator as Faker;

$factory->define(App\Academic::class, function (Faker $faker) {
    $title = $faker->randomElement(['SSC', 'HSC','B.Sc']);
    $institute = $faker->randomElement(['Rahabal High School', 'European University of Bangladesh','College']);
    $group = $faker->randomElement(['Science', 'ARTS','Commerce']);
    $board = $faker->randomElement(['Dhaka', 'Rajshahi','BTEB','Madrasa']);
    $image = $faker->randomElement(['img1.jpg', 'img2.jpg','img3.jpg','img4.jpg','img5.jpg']);
    return [

        'roll' => rand(100000,100100),
        'reg' => rand(200000,200100),
        'title' => $title,
        'institute' => $institute,
        'group' => $group,
        'board' => $board,
        'passing_year' => rand(2010,2018),
        'result' => rand(3,5),
        'marksheet' => $image,
        'certificate' => $image,



    ];
});
