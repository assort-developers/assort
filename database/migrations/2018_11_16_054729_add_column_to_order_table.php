<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToOrderTable extends Migration
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
					$table->string('code',12)->default(NULL)->after('id');
					$table->datetime('update')->default(NOW())->after('create');
					$table->integer('status')->default(0)->after('bland_id');
					$table->integer('latest_updated')->default(NULL)->after('ordered_staffid');
					$table->integer('total_pay')->default(0)->after('delivery_charge');
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
						$table->dropColumn('code');
						$table->dropColumn('update');
						$table->dropColumn('status');
						$table->dropColumn('latest_updated');
						$table->dropColumn('total_pay');
        });
    }
}
