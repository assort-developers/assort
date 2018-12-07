<?php

use Illuminate\Database\Seeder;

class StaffRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff_role')->insert([
            [
                'name' => '株主'
            ],[
                'name'=>'会長'
            ],[
                'name'=>'代表取締役'
            ],[
                'name'=>'副社長'
            ],[
                'name'=>'専務'
            ],[
                'name'=>'常務'
            ],[
                'name'=>'取締役'
            ],[
                'name'=>'支店長'
            ],[
                'name'=>'主任'
            ],[
                'name'=>'役職なし'
            ]
        ]);
    }
}
