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
<<<<<<< HEAD
        $this->call(recieved_seeder::class);
=======
      $this->call(SizeTableseeder::class);
      $this->call(ColorSeeder::class);
      $this->call(CategorySeeder::class);
>>>>>>> c7c80cb761cd0471d3ae57d952cf142d9ecf1a09
    }
}
