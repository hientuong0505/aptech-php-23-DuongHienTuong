<?php

use App\User;
use Illuminate\Database\Seeder;

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
        for($i=0;$i<15;$i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->companyEmail,
                'password' => bcrypt('133556123')
            ]);
        }
    }
}
