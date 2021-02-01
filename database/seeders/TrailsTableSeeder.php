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
                'coverImage' => 'https://scontent.frmq2-2.fna.fbcdn.net/v/t1.15752-9/141023215_852309418901747_4316212907466953615_n.jpg?_nc_cat=107&ccb=2&_nc_sid=ae9488&_nc_ohc=CAXO4w1vidEAX9JsCZ8&_nc_ht=scontent.frmq2-2.fna&oh=eb1d359ca18feeda03987903c414724b&oe=603D496F',
                'difficulty' => 3,
                'evaluation' => 3, 
                'altitude' => 2000,    
            ],
            [
                'title' => '巴陵古道',
                'location_id' => 2,
                'distance' => 1500,
                'coverImage' => 'https://scontent.frmq2-1.fna.fbcdn.net/v/t1.15752-9/143071455_1651648708375463_1613613454721821159_n.jpg?_nc_cat=108&ccb=2&_nc_sid=ae9488&_nc_ohc=jhRAT4gbingAX_uhBSN&_nc_ht=scontent.frmq2-1.fna&oh=cf51908a4ba6c5b1dd1f27898a33cb38&oe=603CB39A',
                'difficulty' => 1,
                'evaluation' => 4, 
                'altitude' => 3000,    
            ],
            [
                'title' => '嘎拉賀野溪溫泉步道',
                'location_id' => 3,
                'distance' => 1600,
                'coverImage' => 'https://scontent.frmq2-2.fna.fbcdn.net/v/t1.15752-9/143603218_416156109695771_5365823086214850707_n.jpg?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=6T-DaBpd2esAX_lt6rV&_nc_ht=scontent.frmq2-2.fna&oh=38b101787f60721794f79c96fa6f33f7&oe=603D739A',
                'difficulty' => 2,
                'evaluation' => 3, 
                'altitude' => 1000,    
            ],
            [
                'title' => '消波塊步道',
                'location_id' => 7,
                'distance' => 2000,
                'coverImage' => 'https://scontent.frmq2-1.fna.fbcdn.net/v/t1.15752-9/143646002_261853525346016_2500229469688745835_n.jpg?_nc_cat=102&ccb=2&_nc_sid=ae9488&_nc_ohc=UVNghzaJRpkAX_85YpF&_nc_ht=scontent.frmq2-1.fna&oh=d3a4d640419ad03800df4a3164edf03f&oe=603C4135',
                'difficulty' => 5,
                'evaluation' => 5, 
                'altitude' => 0,    
            ],
            [
                'title' => '新鮮空氣步道',
                'location_id' => 8,
                'distance' => 5000,
                'coverImage' => 'https://scontent.frmq2-2.fna.fbcdn.net/v/t1.15752-9/144789353_3630349590418690_4759518559162421290_n.jpg?_nc_cat=100&ccb=2&_nc_sid=ae9488&_nc_ohc=_luRs1ACQY0AX8EV7ly&_nc_ht=scontent.frmq2-2.fna&oh=667010c5a5da9d7968be98a5798e1d21&oe=603D44A9',
                'difficulty' => 5,
                'evaluation' => 5, 
                'altitude' => 2000,    
            ],
            [
                'title' => '慶記步道',
                'location_id' => 5,
                'distance' => 1000,
                'coverImage' => 'https://scontent.frmq2-1.fna.fbcdn.net/v/t1.15752-9/144327635_330956631498968_89489618255819297_n.jpg?_nc_cat=102&ccb=2&_nc_sid=ae9488&_nc_ohc=CB2SodT76LIAX9GzAs0&_nc_ht=scontent.frmq2-1.fna&oh=5f507d5211a9a051e38bc40af5f17f5e&oe=603B0BF3',
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
