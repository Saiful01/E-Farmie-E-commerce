<?php

use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\BlogCategory::create([
            'blog_category_name' => "মৎস চাষ"
        ]);
        \App\BlogCategory::create([
            'blog_category_name' => "ছাগল পালন"
        ]);
        \App\BlogCategory::create([
            'blog_category_name' => "গরু পালন"
        ]);
        \App\BlogCategory::create([
            'blog_category_name' => "ধান চাষ"
        ]);
    }
}
