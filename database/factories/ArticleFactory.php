<?php
# @Date:   2019-11-18T18:23:18+00:00
# @Last modified time: 2020-02-26T18:41:18+00:00




use Faker\Generator as Faker;


$factory->define(App\Article::class, function (Faker $faker) {
    return [
      'name' => $faker->sentence($nbWords = 1, $variableNbWords = true),
      'author_id' => function () {
            return factory(App\People::class)->create()->id;
      },
      'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
      'description' => $faker->sentence($nbWords = 12, $variableNbWords = true),
      'detailedDesc' => $faker->sentence($nbWords = 152, $variableNbWords = true),
      'url' => $faker->sentence($nbWords = 1, $variableNbWords = true),
      'urlToImage' => $faker->sentence($nbWords = 1, $variableNbWords = true),
      //'publishedAt' => $faker->sentence($nbWords = 1, $variableNbWords = true),
      'publishedAt' => date('d-m-y'),
    ];
});
