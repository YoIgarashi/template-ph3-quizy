<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choice = [[
            'name' => 'たかなわ',
            'valid' => '1',
            'question_id' => '1',

        ], [
            'name' => 'たかわ',
            'valid' => '2',
            'question_id' => '1',
        ],[
            'name' => 'こうわ',
            'valid' => '2',
            'question_id' => '1',
            
        ],[
            'name' => 'かめいど',
            'valid' => '1',
            'question_id' => '2',
            
        ],[
            'name' => 'かめど',
            'valid' => '2',
            'question_id' => '2',
            
        ],[
            'name' => 'かめいと',
            'valid' => '2',
            'question_id' => '2',
            
        ],[
            'name' => 'ぬかいひら',
            'valid' => '2',
            'question_id' => '2',
            
        ],[
            'name' => 'むこうひら',
            'valid' => '1',
            'question_id' => '2',
            
        ],[
            'name' => 'むかひら',
            'valid' => '2',
            'question_id' => '2',
            
        ],
    
    ];


        DB::table('choices')->insert($choice);
    }
}
