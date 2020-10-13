<?php

use App\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<5;$i++) {
            $title = $faker->sentence(rand(3,7),true);
            $slug = Str::slug($title,'-');
            $description = $faker->text(rand(100,300));
            $content = $faker->text(rand(200,700));
            Article::create([
                'title' => $title,
                'slug' => $slug,
                'description' => $description,
                'content' => $content,
            ]);
        }
    }
}
