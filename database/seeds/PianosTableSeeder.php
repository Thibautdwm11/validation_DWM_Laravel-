<?php

use Illuminate\Database\Seeder;

class PianosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'name'=>'Longue-queue',
            'genre_id'=>1,
            'description'=>'blablabla'

        ]);
        DB::table('pianos')->insert([
            'name'=>'courte-queue',
            'genre_id'=>2,
            'description'=>'blablabla',

        ]);
        DB::table('pianos')->insert([
        'name'=>'micro-queue',
        'genre_id'=>3,
        'description'=>'blablabla',

        ]);
    }
}
