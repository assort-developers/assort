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
        DB::table('customer')->truncate();
        DB::table('customer')->insert([
            'family_name' => 'OIC',
            'first_name' => '太郎',
            'birthday' => '2018-01-01',
            'gender' => '0',
            'family_name_kana' => 'オーアイシー',
            'first_name_kana' => 'タロウ',
            'phone' => '000-111-2222',
            'mobile_phone' => '000-1111-2222',
            'type' => 1,
            'create_date' => '2018-01-01 01:11:11',
            'update_time' => '2018-01-31 01:11:11',
            'password' => '1'
        ]);

        DB::table('customer_address')->truncate();
        DB::table('customer_address')->insert([
            'customer_id'=>'1',
            'zip_code'=>'581-0000',
            'address_pref'=>'27',
            'address_city'=>'大阪市',
            'address_town'=>'天王寺区上本町1−1',
            'address_build'=>'oic本社',
            'address_name'=>'滝谷典子',
            'contact_tel'=>'090-0000-0000'
        ]);
    }
}
