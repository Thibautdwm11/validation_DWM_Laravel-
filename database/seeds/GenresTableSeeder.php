<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name'=>'classique',
        ]);

        DB::table('genres')->insert([
            'name'=>'electrique',
        ]);

        DB::table('genres')->insert([
            'name'=>'old-school',
        ]);
    }
}
