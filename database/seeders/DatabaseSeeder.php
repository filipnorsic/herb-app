<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Measurement;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::query()->delete();
        User::factory(10)->create();
        Client::query()->delete();
        Client::factory(15)->create();
        Measurement::query()->delete();
        Measurement::factory(50)->create();


        $this->call([
            RoleSeeder::class,
        ]);

    }
}
