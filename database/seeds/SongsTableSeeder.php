<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Song;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 10; $i++){
        for ($j=0; $j < 10; $j++) {
          $newSong = new Song();
          $newSong->title = $faker->word;
          $newSong->genre = $faker->randomElement([
            'pop',
            'rap',
            'jazz',
            'blues',
            'rock',
            'country',
            'reggae',
            'metal',
            'classic',
            'indie',
          ]);
          $newSong->duration = $faker->randomFloat($nbMaxDecimals = 2, $min = 3, $max = 5);
          $newSong->album_id = $i + 1;
          $newSong->save();
        }
      }
    }
}
