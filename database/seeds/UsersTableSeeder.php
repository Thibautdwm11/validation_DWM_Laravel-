<?php

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
        DB::table('users')->insert([
            'name'=>'Thibaut',
            'email'=>Str::random(10).'@gmail.com',
            'password'=>bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name'=>'WesLey',
            'email'=>Str::random(10).'@gmail.com',
            'password'=>bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name'=>'J&RoM',
            'email'=>Str::random(10).'@gmail.com',
            'password'=>bcrypt('admin'),
        ]);
    }
}
