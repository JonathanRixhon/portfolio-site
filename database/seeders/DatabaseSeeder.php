<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Work;
use App\Models\Technology;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (env('APP_ENV') !== 'production') {
            // Work::factory(3)
            //     ->hasAttached(
            //         Technology::factory()
            //             ->for(\App\Models\Discipline::factory())
            //             ->count(3)
            //             ->create(),
            //         [],
            //         'technologies'
            //     )->create();
        }

        \App\Models\User::factory()->create([
            'name' => 'Jonathan Rixhon',
            'email' => env('ADMIN_EMAIL'),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
        ]);
    }
}
