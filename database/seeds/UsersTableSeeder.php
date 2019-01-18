<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * password:oraoic
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'test1',
                'email' => 'b1111@oic.jp',
                'password' => '$2y$10$yveHYy2CPxEfxmFjU5Mr.e1hhBB73Nfn4IOzTGn0nvmelXd6woVru',
                'role'=>'1',
                'created_at'=>'2018-12-21 13:32:23',
                'updated_at'=>'2018-12-21 13:32:23'
            ],[
                'name' => 'test2',
                'email' => 'b2222@oic.jp',
                'password' => '$2y$10$yveHYy2CPxEfxmFjU5Mr.e1hhBB73Nfn4IOzTGn0nvmelXd6woVru',
                'role'=>'5',
                'created_at'=>'2018-12-21 13:32:23',
                'updated_at'=>'2018-12-21 13:32:23'
            ],[
                'name' => 'test3',
                'email' => 'b3333@oic.jp',
                'password' => '$2y$10$yveHYy2CPxEfxmFjU5Mr.e1hhBB73Nfn4IOzTGn0nvmelXd6woVru',
                'role'=>'10',
                'created_at'=>'2018-12-21 13:32:23',
                'updated_at'=>'2018-12-21 13:32:23'
            ]
        ]);
    }
}
