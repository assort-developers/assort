<?php

use Illuminate\Database\Seeder;

class recieved_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('recieved')->insert([
                'order_day'=>NOW(),
                'shipment_day'=>NOW(),
                'maill'=>'b0000@oic.jp',
                'price'=>'100',
                'pay'=>'後払い',
                'staff_name'=>'ぽっぽさん',
                'update_day'=>NOW(),
                'code'=>'RE001',
                'tel'=>'0000-0000-00'
        ]);
        //
    }
}
