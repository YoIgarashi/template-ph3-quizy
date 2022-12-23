<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choice = [
            'name' => 'たかなわ'
            'valid' => '1'
        ];
        $choice = [
            'name' => 'たかわ'
            'valid' => '2'
        ];
        $choice = [
            'name' => 'こうわ'
            'valid' => '2'
        ];


        DB::table('choices')->insert($choice);
    }
}
