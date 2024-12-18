<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Chirp;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Chirp::factory()->create([
            'message'=> 'Example'
        ]);

        Chirp::factory(10)->create();
        User::factory(10)->create();
    }

}
