<?php

use Illuminate\Database\Seeder;

class create_staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            'code' => 'tyokinuhata',
            'family_name' => '明仁',
            'first_name' => '天皇',
            'family_name_kana' => 'あきひと',
            'first_name_kana' => 'てんのう',
            'birthday'=>'1933-12-23',
            'contact_tel' => '080-1111-2222',
            'mail_address' => 'info@koukyo.jp',
            'hiredate'=>'1989-01-07',
            'staff_role_id' => 1
        ]);
    }
}
