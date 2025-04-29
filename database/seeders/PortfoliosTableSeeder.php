<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Portfolio;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i= 0; $i<5; $i++){
            $newPortfolio = new Portfolio();
            $newPortfolio->title = $faker->name(); 
            $newPortfolio->description = $faker->text();
            $newPortfolio->image = $faker->imageUrl();
            $newPortfolio->type_id = rand(1,4);

            $newPortfolio->save();
        }
    }
}
