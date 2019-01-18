<?php

use Illuminate\Database\Seeder;

class OrderContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('order_content')->truncate();
      DB::table('order_content')->insert(
				[
					'order_id' => 1,
					'product_id' => 1,
					'amount' => 5,
					'subtotal' => 500,
					'is_arrival' => 0,
					'arrival_date' => NULL,
					'arrival_check_staffid' => 1
				],[
					'order_id' => 2,
					'product_id' => 2,
					'amount' => 2,
					'subtotal' => 200,
					'is_arrival' => 0,
					'arrival_date' => NULL,
					'arrival_check_staffid' => 1
				],[
					'order_id' => 2,
					'product_id' => 1,
					'amount' => 1,
					'subtotal' => 100,
					'is_arrival' => 0,
					'arrival_date' => NULL,
					'arrival_check_staffid' => 1
				]
				);
    }
}
