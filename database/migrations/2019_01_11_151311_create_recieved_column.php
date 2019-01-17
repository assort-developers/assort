<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecievedColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recieved', function (Blueprint $table) {
            //
            $table->integer('shipment_charge')->default(0);
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
        Schema::create('recieved_content', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('recieved_id');
            $table->integer('product_id');
            $table->integer('quantity')->default(0);
            $table->integer('shipment_status')->default(0);
            $table->date('shipment_date')->nullable()->default(null);
            $table->timestamps();
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
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
        Schema::dropIfExists('recieved_content');
    }
}
