<?php

use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color')->insert([
            [
                'print_color'=>'赤'
            ],[
                'print_color'=>'白'
            ],[
                'print_color'=>'黄'
            ],[
                'print_color'=>'黒'
            ]
        ]);
    }
}
