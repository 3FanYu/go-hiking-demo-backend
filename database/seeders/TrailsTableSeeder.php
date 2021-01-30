<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trails')->delete();
        $datas=[
            [
                'title' => '東眼山自導式步道',
                'location_id' => 3,
                'distance' => 4000,
                'coverImage' => 'https://example.com/uploads/images/collection/0/icon.png',
                'difficulty' => 3,
                'evaluation' => 3, 
                'altitude' => 2000,    
            ],
            [
                'title' => '巴陵古道',
                'location_id' => 2,
                'distance' => 1500,
                'coverImage' => 'https://example.com/uploads/images/collection/0/icon.png',
                'difficulty' => 1,
                'evaluation' => 4, 
                'altitude' => 3000,    
            ],
            [
                'title' => '嘎拉賀野溪溫泉步道',
                'location_id' => 3,
                'distance' => 1600,
                'coverImage' => 'https://example.com/uploads/images/collection/0/icon.png',
                'difficulty' => 2,
                'evaluation' => 3, 
                'altitude' => 1000,    
            ],
            [
                'title' => '消波塊步道',
                'location_id' => 7,
                'distance' => 2000,
                'coverImage' => 'https://example.com/uploads/images/collection/0/icon.png',
                'difficulty' => 5,
                'evaluation' => 5, 
                'altitude' => 0,    
            ],
            [
                'title' => '新鮮空氣步道',
                'location_id' => 8,
                'distance' => 5000,
                'coverImage' => 'https://example.com/uploads/images/collection/0/icon.png',
                'difficulty' => 5,
                'evaluation' => 5, 
                'altitude' => 2000,    
            ],
            [
                'title' => '慶記步道',
                'location_id' => 5,
                'distance' => 1000,
                'coverImage' => 'https://example.com/uploads/images/collection/0/icon.png',
                'difficulty' => 5,
                'evaluation' => 5, 
                'altitude' => 1000,    
            ],
            
        ];
        foreach ($datas as $data){
            DB::table('trails')->insert([
                'title' => $data['title'],
                'location_id' => $data['location_id'],
                'distance'=> $data['distance'],
                'coverImage'=> $data['coverImage'],
                'difficulty' => $data['difficulty'],
                'evaluation' => $data['evaluation'],
                'altitude' => $data['altitude']
                ]);
        }
    }
}
