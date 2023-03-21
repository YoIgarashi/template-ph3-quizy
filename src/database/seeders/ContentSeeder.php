<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [[
                'study_content' =>'N予備校',
                'color_code' =>'#0042E5',
            ],[
                'study_content' =>'ドットインストール',
                'color_code' =>'#0070BA',
            ],[
                'study_content' =>'POSSE課題',
                'color_code' =>'#02BDDB',
            ],];
        DB::table('contents')->insert($contents);
    }
}
