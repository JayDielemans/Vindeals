<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'JohnDoe@example.com',
            'role' => 'regulier',
        ]);

        User::factory()->create([
            'name' => 'Jane Doe',
            'email' => 'JaneDoe@example.com',
            'role' => 'particulier'
        ]);

          User::factory()->create([
            'name' => 'ACME Corp',
            'email' => 'ACME@example.com',
            'role' => 'zakelijk'
        ]);
    }
}
