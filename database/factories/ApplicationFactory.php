<?php

use Faker\Generator as Faker;

$factory->define(App\Application::class, function (Faker $faker) {

    $relation = $faker->randomElement(['Father', 'Brother','Uncle']);
    $image = $faker->randomElement(['img1.jpg', 'img2.jpg','img3.jpg','img4.jpg','img5.jpg']);

    return [
        'level' => rand(1,2),
        'year' => rand(2019,2020),
        'semester' => rand(1,3),
        'shift' => rand(1,2),
        'name' => $faker->name,
        'fname' => $faker->name,
        'mname' => $faker->name,
        'dob' => rand(1,2),
        'gender' => rand(1,2),
        'phone'  => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'nationality' => 'Bangladeshi',
        'guardian' => $faker->name,
        'guardian_relation' => $relation,
        'present_address' => $faker->address,
        'parmanent_address' => $faker->address,
        'image' => $image,
        'approved' => true,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});
