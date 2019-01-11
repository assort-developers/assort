<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customer')->insert([
            'famiry_name' => 'OIC',
            'first_name' => '太郎',
            'birthday' => '2018-01-01',
            'gender' => '男性',
            'famiry_name_kana' => 'オーアイシー',
            'first_name_kana' => 'タロウ',
            'phone' => '0000-1111-2222',
            'mobile_phone' => '0000-1111-2222',
            'type' => 1,
            'create_date' => '2018-01-01 01:11:11',
            'update_time' => '2018-01-31 01:11:11',
            'password' => '1'
        ]);
    }
}
