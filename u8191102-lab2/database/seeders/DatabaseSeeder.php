<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tag::factory(100)->create();
        \App\Models\Article::factory(100)->create();
        \App\Models\ArticleTag::factory(100)->create();
    }
}
