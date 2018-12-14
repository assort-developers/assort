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
                'mail'=>'b0000@oic.jp',
                'price'=>'100',
                'pay'=>'後払い',
                'staff_name'=>'ぽっぽさん',
                'update_day'=>NOW(),
                'code'=>'RE001',
                'tel'=>'00-000-00000',
                'custmer_address_id' => '1'
        ]);

        DB::table('recieved')->insert([
            'order_day'=>NOW(),
            'shipment_day'=>NOW(),
            'mail'=>'b0001@oic.jp',
            'price'=>'200',
            'pay'=>'後払い',
            'staff_name'=>'鳩さん',
            'update_day'=>NOW(),
            'code'=>'RE002',
            'tel'=>'11-1111-1111',
            'custmer_address_id' => '2'
        ]);

        DB::table('recieved')->insert([
            'order_day'=>NOW(),
            'shipment_day'=>NOW(),
            'mail'=>'b0002@oic.jp',
            'price'=>'200',
            'pay'=>'後払い',
            'staff_name'=>'鳩さん',
            'update_day'=>NOW(),
            'code'=>'RE003',
            'tel'=>'22-2222-2222',
            'custmer_address_id' => '0'
        ]);
    }
}
