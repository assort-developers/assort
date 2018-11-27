<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			//
			DB::table('brand')->insert([
				'name' => 'やばくないTシャツ屋さん',
				'kana' => 'ヤバクナイティーシャツヤサン',
				'zip_code' => '100-8111',
				'address_pref' => 13,
				'address_city' => '千代田区',
				'address_town' => '千代田1-1',
				'address_build' => NULL,
				'tel' => '0000-11-2222',
				'mail' => 'b0000@oic.jp',
				'fax' => NULL,
				'updateby' => 1,
				'update' => NOW(),
				'staff_id' => 1
			]);
			DB::table('order')->insert([
				'code' => 'OD001',
				'total' => 100,
				'brand_id' => 1,
				'status' => 0,
				'total_pay' => 110,
				'delivery_charge' => 10,
				'delivery_date' => '2018-12-31',
				'ordered_staffid' => 1,
				'order_date' => '2018-12-15 10:15:30',
				'latest_updated' => 0,
				'update' => NOW(),
				'create' => NOW()
		 ]);
    }
}
