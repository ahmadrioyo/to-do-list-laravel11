<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::truncate();
        // Blog::create([
        //     'title' => 'Blog 1',
        //     'description' => 'ini adalah description blog 1',
        // ]);
        // Blog::create([
        //     'title' => 'Blog 2',
        //     'description' => 'ini adalah description blog 2',
        // ]);
        // Blog::create([
        //     'title' => 'Blog 3',
        //     'description' => 'ini adalah description blog 3',
        // ]);
        // Blog::create([
        //     'title' => 'Blog 4',
        //     'description' => 'ini adalah description blog 4',
        // ]);
        // Blog::create([
        //     'title' => 'Blog 5',
        //     'description' => 'ini adalah description blog 5',
        // ]);
        Blog::factory(50)->create();
    }
}
