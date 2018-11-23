<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
						//
						$table->date('delivery_date')->default(NULL)->after('delivery_charge');
						$table->datetime('order_date')->default(NULL)->after('ordered_staffid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
						//
						$table->dropColumn('delivery_date');
						$table->dropColumn('order_date');
        });
    }
}
