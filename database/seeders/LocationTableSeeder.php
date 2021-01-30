<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->delete();
        $datas=[
            [
                'name'=>'北投區',
                'countie_id'=>1,
            ],
            [
                'name'=>'復興區',
                'countie_id'=>3,
            ],
            [
                'name'=>'復興鄉',
                'countie_id'=>3,
            ],
            [
                'name'=>'北屯區',
                'countie_id'=>7,
            ],
            [
                'name'=>'南屯區',
                'countie_id'=>7,
            ],
            [
                'name'=>'新烏日',
                'countie_id'=>7,
            ],
            [
                'name'=>'沙鹿區',
                'countie_id'=>7,
            ],
            [
                'name'=>'谷關區',
                'countie_id'=>7,
            ],
        ];
        foreach ($datas as $data){
            DB::table('location')->insert([
                'name' => $data['name'],
                'countie_id' => $data['countie_id'],
                ]);
        }
        
    }
}
