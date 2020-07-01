<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++){
        $faker = Faker\Factory::create('vi_VN');
        DB::table('articles')->insert([
            'title' => $faker->text(20),
            'description'=>$faker->text(50),
            'content'=>$faker->text(20)
        ]);
        }
    }
}
