<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['Tailwind CSS','Bootstrap', 'CSS', 'React'];

        foreach($technologies as $technology){
            $newTech = new Technology();

            $newTech->title_technology = $technology;

            $newTech->save();

        };
    }
    
}
