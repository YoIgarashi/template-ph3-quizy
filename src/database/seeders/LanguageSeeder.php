<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = [[
            'language'=> 'PHP',
            'color_code'=> '#04CDFA',
        ],[
            'language'=> 'Laravel',
            'color_code'=> '#B39DED',
        ],[
            'language'=> 'HTML',
            'color_code'=> '#0042E5',
        ],[
            'language'=> 'CSS',
            'color_code'=> '#0070BA',
        ],[
            'language'=> 'Javascript',
            'color_code'=> '#02BDDB',
        ],[
            'language'=> 'SQL',
            'color_code'=> '#F6F3FD',
        ],[
            'language'=> 'SHELL',
            'color_code'=> '#6C44E6',
        ],[
            'language'=> 'その他',
            'color_code'=> '#2B01BA',
        ],
    ];
    DB::table('languages')->insert($languages);

    }
}
