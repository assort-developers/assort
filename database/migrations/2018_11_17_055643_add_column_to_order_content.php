<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnToOrderContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order_content', function (Blueprint $table) {
						//
						$table->datetime('arrival_date')->nullable()->default(NULL)->after('is_arrival');
						$table->integer('arrival_check_staffid')->nullable()->default(NULL)->after('arrival_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order_content', function (Blueprint $table) {
						//
						$table->dropColumn('arrival_date');
						$table->dropColumn('arrival_check_staffid');
        });
    }
}
