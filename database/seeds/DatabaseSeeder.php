<?php

use Illuminate\Database\Seeder;
  
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
			$this->call(OrderTableSeeder::class);
      $this->call(OrderContentSeeder::class);
      $this->call(create_staff::class);
      $this->call(ProductsSeeder::class);
      $this->call(StaffRoleSeeder::class);
        $this->call(recieved_seeder::class);
    }
}
