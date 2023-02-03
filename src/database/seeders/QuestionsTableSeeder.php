<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeder\DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = [[
            'local_name' =>'高輪',
            'big_question_id' => '1',
            'image' => 'aaaa.jp',
        ],[
            'local_name' =>'亀戸',
            'big_question_id' => '1',
            'image' => 'bbb.jp',
        ],[
            'local_name' =>'向平',
            'big_question_id' => '2',
            'image' => 'ccc.jp',
        ]];
        FacadesDB::table('questions')->insert($question);
    }
        
}
