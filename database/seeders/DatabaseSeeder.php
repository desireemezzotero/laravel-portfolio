<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crea un utente di test
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Chiama il seeder dei portfolio una volta sola
        $this->call(PortfoliosTableSeeder::class);
    }
}
