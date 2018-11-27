<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->date('birthday')->default(NULL)->after('first_name_kana');
            $table->date('hiredate')->default(NULL)->after('mail_address');
            $table->string('zip_code', 8)->after('birthday');
            $table->integer('address_pref')->after('zip_code');
            $table->string('address_city', 45)->after('address_pref');
            $table->string('address_town', 100)->after('address_city');
            $table->string('address_build', 100)->nullable()->default(NULL)->after('address_town');
            $table->integer('updateby')->after('hiredate');
            $table->dateTime('update')->after('updateby');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn('birthday');
            $table->dropColumn('hiredate');
            $table->dropColumn('zip_code');
            $table->dropColumn('address_pref');
            $table->dropColumn('address_city');
            $table->dropColumn('address_town');
            $table->dropColumn('address_build');
            $table->dropColumn('updateby');
            $table->dropColumn('update');
        });    
    }
}
