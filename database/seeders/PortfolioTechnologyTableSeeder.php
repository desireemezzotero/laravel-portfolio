<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;  
use App\Models\Technology; 

class PortfolioTechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = Portfolio::all();
        $technologies = Technology::all();

        foreach ($portfolios as $portfolio) {
           
            $portfolio->technologies()->attach(
                $technologies->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
