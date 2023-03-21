<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [[
            'study_time' => '6',
            'date' =>'2022-03-21',
        ],[
            'study_time' => '2',
            'date' =>'2022-03-22',
        ],[
            'study_time' => '3',
            'date' =>'2022-03-24',
        ],[
            'study_time' => '5',
            'date' =>'2022-03-18',
        ],[
            'study_time' => '4',
            'date' =>'2022-03-19',
        ],];
        DB::table('records')->insert($records);
    }
}
