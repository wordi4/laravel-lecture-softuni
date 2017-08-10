<?php

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insert([
            [
                'title'       => 'article1',
                'description' => 'article1 desc',
                'status'      => 'active'
            ],
            [
                'title'       => 'article2',
                'description' => 'article2 desc',
                'status'      => 'active'
            ]
        ]);

        factory(App\Models\Article::class, 3)->create();
    }
}
