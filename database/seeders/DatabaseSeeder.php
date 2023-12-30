<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Work;
use App\Models\Technology;
use Illuminate\Support\Str;
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

        \App\Models\Discipline::create([
            'name' => 'Backend development',
            'slug' => Str::slug('Backend development'),
        ]);

        \App\Models\Discipline::create([
            'name' => 'Frontend development',
            'slug' => Str::slug('Frontend development'),
        ]);

        \App\Models\Discipline::create([
            'name' => 'Web design',
            'slug' => Str::slug('Web design'),
        ]);


    }
}
