<?php

namespace Database\Seeders;

use App\Models\Rating;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $seedRatings =  [
          ['name'=>"Brilliant",'stars'=>5,],
          ['name'=>"Great",'stars'=>4,],
          ['name'=>"Ok",'stars'=>3,],
          ['name'=>"Needs Improving",'stars'=>2,],
          ['name'=>"Terrible",'stars'=>1,],
          ['name'=>"You mean what?",'stars'=>0,],
        ];

          foreach ($seedRatings as $seedRating) {
              Rating::create($seedRating);

          }

    }
}
