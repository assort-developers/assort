<?php

use Illuminate\Database\Seeder;

class SizeTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size')->insert([
            [
                'id'=>'1',
                'print_size'=>'S',
                'gender'=>'0'
            ],[
                'id'=>'2',
                'print_size'=>'M',
                'gender'=>'1'
            ],[
                'id'=>'3',
                'print_size'=>'L',
                'gender'=>'2'
            ],[
                'id'=>'4',
                'print_size'=>'S',
                'gender'=>'1'
            ]
        ]);
    }
}
