<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LearnedLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $learned_languages =[[
            'record_id' => '1',
            'languages_id'=>'4',
        ],[
            'record_id' => '2',
            'languages_id'=>'3',
        ],[
            'record_id' => '3',
            'languages_id'=>'5',
        ],[
            'record_id' => '4',
            'languages_id'=>'6',
        ],[
            'record_id' => '5',
            'languages_id'=>'7',
        ],[
            'record_id' => '6',
            'languages_id'=>'3',
        ],[
            'record_id' => '7',
            'languages_id'=>'2',
        ],[
            'record_id' => '8',
            'languages_id'=>'1',
        ],
    ];
        DB::table('learned_languages')->insert($learned_languages);
    }
}
