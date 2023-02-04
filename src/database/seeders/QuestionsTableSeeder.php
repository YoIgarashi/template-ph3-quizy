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
            'image' => 'takanawa',
        ],[
            'local_name' =>'亀戸',
            'big_question_id' => '1',
            'image' => 'kameido',
        ],[
            'local_name' =>'向洋',
            'big_question_id' => '2',
            'image' => 'mukainada',
        ]];
        FacadesDB::table('questions')->insert($question);
    }
        
}
