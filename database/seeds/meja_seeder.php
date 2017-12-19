<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class meja_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $faker = Faker::create();


      foreach (range(1,50) as $index) {
          $meja[] = [
            'no_meja'     => $faker->numberBetween( 1, 50 ),
            'status'      => $faker->randomElement($array = ['resepasi', 'orders','ready']),
            'created_at' => new DateTime,
            'updated_at' => new DateTime,
        ];
      }
      DB::table('mejas')->insert($meja);
    }
}
