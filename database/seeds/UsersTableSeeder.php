<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 4; $i++) {
            User::create([
                "first_name" => "user$i",
                'second_name' => "test$i",
                'email' => "email$i@gmail.com",
                'password' => bcrypt('111111'),
                'roles_id' => $i + 1,
            ]);
        }
    }
}
