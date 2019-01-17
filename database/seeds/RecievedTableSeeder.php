<?php

use Illuminate\Database\Seeder;

class RecievedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->truncate();
        DB::table('customer')->insert([
            [
                'family_name' => '鈴木',
                'first_name' => '太郎',
                'birthday' => '2000-01-01',
                'gender' => 1,
                'family_name_kana' => 'スズキ',
                'first_name_kana' => 'タロウ',
                'create_date' => now(),
                'update_time' => now()
            ],[
                'family_name' => '竹中',
                'first_name' => '三郎',
                'birthday' => '2000-01-01',
                'gender' => 1,
                'family_name_kana' => 'タケナカ',
                'first_name_kana' => 'サブロウ',
                'create_date' => now(),
                'update_time' => now()
            ]
        ]);
        DB::table('customer_address')->truncate();
        DB::table('customer_address')->insert([
            [
                'customer_id' => 1,
                'zip_code' => '100-8111',
                'address_pref' => 13,
                'address_city' => '千代田区',
                'address_town' => '千代田1-1',
                'address_name' => '鈴木太郎',
                'contact_tel'=> '080-1111-2222'
            ],[
                'customer_id' => 2,
                'zip_code' => '100-8111',
                'address_pref' => 13,
                'address_city' => '千代田区',
                'address_town' => '千代田2-2',
                'address_name' => '竹中三郎',
                'contact_tel'=> '080-1111-2222'
            ]
        ]);



        DB::table('recieved')->truncate();
        DB::table('recieved')->insert([
            [
                'customer_id' => 1,
                'shipment_charge' => 500,
                'customer_address_id' => 1
            ],[
                'customer_id' => 2,
                'shipment_charge' => 500,
                'customer_address_id' => 2
            ]
        ]);
        DB::table('recieved_content')->truncate();
        DB::table('recieved_content')->insert([
            [
                'recieved_id' => 1,
                'product_id' => 1,
                'quantity' => 3,
                'shipment_status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'recieved_id' => 2,
                'product_id' => 1,
                'quantity' => 5,
                'shipment_status' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
