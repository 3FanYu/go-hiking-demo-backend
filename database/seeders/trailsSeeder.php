<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class trailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trails')->insert([
            'title' => '東眼山自導式步道',
            'location' => '復興鄉',
            'distance' => '4000',
            'coverImage' => 'https://example.com/uploads/images/collection/0/icon.png',
            'county' => '桃園縣',
            'difficulty' => '3',
            'evaluation' => '3', 
            'altitude' => '2000',       
        ]);
        //
    }
}
