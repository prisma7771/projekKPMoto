<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Prisma Putra',
            'username' => 'prisma',
            'email' => 'prismaputra91@gmail.com',
            'password' => bcrypt('matius777'),
            'email_verified_at' => now(),
            'is_admin' => 1
        ]);

        Post::factory(20)->create();

            //Seeder for Category
        Category::create([
            'name' => 'Accessories',
            'slug' => 'accessories'
        ]);

        Category::create([
            'name' => 'Motor',
            'slug' => 'motor'
        ]);

        Category::create([
            'name' => 'Mobil',
            'slug' => 'mobil'
        ]);

        Category::create([
            'name' => 'Machine',
            'slug' => 'machine'
        ]);

        Category::create([
            'name' => 'Tool',
            'slug' => 'tool'
        ]);

        User::factory(3)->create();
    }
}
