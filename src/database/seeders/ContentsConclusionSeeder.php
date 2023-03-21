<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsConclusionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents_conclusions = [
            [
                'study_time_id' => '7',
                'content_id' => '1',
            ], [
                'study_time_id' => '2',
                'content_id' => '3',
            ], [
                'study_time_id' => '6',
                'content_id' => '2',
            ],
        ];
        DB::table('contents_conclusion')->insert($contents_conclusions);
    }
}
