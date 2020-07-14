<?php

use App\User;
use Illuminate\Database\Seeder;

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
        for ($i=0;$i<10;$i++){
        User::create([
            'title' => $faker -> text,
            'slug' => $faker -> text,
            'description' => $faker -> sentence($nbWords = 6),
        ]);}
    }
}
