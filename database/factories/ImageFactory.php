<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\User;
use App\Models\Country;
use Faker\Generator as Faker;
use Illuminate\Http\UploadedFile;


$factory->define(App\Models\Image::class, function (Faker $faker) {

    return [
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'country_id' =>  function () {
            return factory(App\Models\Country::class)->create()->id;
        },
        'imgpath' => UploadedFile::fake()->image('test.jpg')
    ];
});
