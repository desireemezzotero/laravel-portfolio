<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Laravel', 'PHP', 'React','MySQL'];

        foreach($types as $type){
            $newType = new Type();
            
            $newType->title_type = $type;
        
            $newType->save();
        }
    }
}
