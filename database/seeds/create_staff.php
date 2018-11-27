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
            'family_name' => 'テスト',
            'first_name' => '太郎',
            'family_name_kana' => 'テスト',
            'first_name_kana' => 'タロウ',
            'contact_tel' => '080-1111-2222',
            'mail_address' => 'info@koukyo.jp',
            'staff_role_id' => 1
        ]);
    }
}
