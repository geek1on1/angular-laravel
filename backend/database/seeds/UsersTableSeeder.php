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
        User::create([
            'name' => 'Paulo Henrique S. Goes',
            'email' => 'paulo.igen@gmail.com',
            'password' => bcrypt('master')
        ]);
    }
}
