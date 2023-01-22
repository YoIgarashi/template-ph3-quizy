<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\DB;
use Illuminate\Support\Facades\DB as FacadesDB;


class Big_QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $big_question = [[
            'prefecture_name' => '東京',
            
        ],
        [
            'prefecture_name' => '広島',
        ]];
        FacadesDB::table('big_questions')->insert($big_question);
    }
}