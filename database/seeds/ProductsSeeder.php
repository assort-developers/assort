<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			DB::table('product_codename')->truncate();
			DB::table('product')->truncate();
      DB::table('product_codename')->insert([
				'name' => 'ヤバそうでヤバくないちょっとヤバいTシャツ(完全版)',
				'category_id' => 1,
				'brand_id' => 1,
				'price' => 300
			]);
			DB::table('product')->insert([
				'product_codename_id' => 1,
				'size_id' => 1,
				'color_id' => 1,
				'stock_shelf_id' => 1,
				'stock_amount' => 10,
				'update' => NOW(),
				'created' => NOW(),
				'updateby' => 1
			]);
    }
}

