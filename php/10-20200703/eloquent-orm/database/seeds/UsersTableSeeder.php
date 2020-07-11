<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            // DB::table('users')->insert([
            //     'name' => $faker->text(20),
            //     'email' => $faker->safeEmail,
            //     'password' => bcrypt('hello')
            // ]);
            $name = $faker->name();
            $email = $faker->safeEmail;
            User::create([
                "name" => $name,
                "email" => $email,
                "password" => bcrypt('hello')
            ]);
        }
    }
}
