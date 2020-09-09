<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) {
          $newImage = new Image();
          $newImage->url = $faker->imageUrl();
          $newImage->album_id = $i + 1;
          $newImage->save();
        }
    }
}
