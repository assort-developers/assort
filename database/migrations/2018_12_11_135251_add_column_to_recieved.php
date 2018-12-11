<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToRecieved extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recieved', function (Blueprint $table) {
            $table->integer('recieved_id');//受注コード
            $table->dateTime('order_day');//注文日
            $table->date('shipment_day');//発送日
            $table->string('maill');//メールアドレス
            $table->integer('tel');//電話番号
            $table->integer('price');//支払金額
            $table->string('pay',32);//支払方法
            $table->string('staff_name',20);//更新者　
            $table->dateTime('update_day');//更新日
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recieved', function (Blueprint $table) {
            //
        });
    }
}
