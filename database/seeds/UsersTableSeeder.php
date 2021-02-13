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
        User::create([
            'name'=>'dawit',
            'email'=>'devo3start@gmail.com',
            'phone'=>'0911826340',
            'password'=>bcrypt('EDuna@2013'),
            'is_admin'=>1,
        ]); 
    }
}
