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
            [
            'code' => 'tyokinuhata',
            'family_name' => '明仁',
            'first_name' => '天皇',
            'family_name_kana' => 'あきひと',
            'first_name_kana' => 'てんのう',
            'birthday'=>'1933-12-23',
            'zip_code' => '100-8111',
			'address_pref' => 13,
			'address_city' => '千代田区',
			'address_town' => '千代田1-1',
			'address_build' => NULL,
            'contact_tel' => '080-1111-2222',
            'mail_address' => 'info@koukyo.jp',
            'hiredate'=>'1989-01-07',
            'updateby'=>'2',
            'update'=>'2018-11-27 23:25:46',
            'staff_role_id' => 1
            ],[
            'code' => 'shouwa',
            'family_name' => '昭和',
            'first_name' => '天皇',
            'family_name_kana' => 'しょうわ',
            'first_name_kana' => 'てんのう',
            'birthday'=>'1901-04-29',
            'zip_code' => '100-8111',
			'address_pref' => 13,
			'address_city' => '千代田区',
			'address_town' => '千代田1-1',
			'address_build' => NULL,
            'contact_tel' => '080-1111-2222',
            'mail_address' => 'info@koukyo.jp',
            'hiredate'=>'1926-12-25',
            'updateby'=>'2',
            'update'=>'2018-11-27 23:25:46',
            'staff_role_id' => 1
            ]
        ]);
    }
}
