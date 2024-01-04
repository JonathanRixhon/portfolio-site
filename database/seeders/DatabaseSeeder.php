<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Work;
use App\Models\Technology;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\PageTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PageTableSeeder::class,
        ]);

        \App\Models\User::create([
            'name' => 'Jonathan Rixhon',
            'email' => env('ADMIN_EMAIL'),
            'email_verified_at' => now()->subYear(),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
        ]);

        \App\Models\Discipline::create([
            'name' => 'Backend',
            'slug' => Str::slug('Backend'),
        ]);

        \App\Models\Discipline::create([
            'name' => 'Frontend',
            'slug' => Str::slug('Frontend'),
        ]);

        \App\Models\Discipline::create([
            'name' => 'Web design',
            'slug' => Str::slug('Web design'),
        ]);
    }
}
