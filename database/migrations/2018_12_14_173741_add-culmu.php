<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCulmu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recieved', function (Blueprint $table) {
            $table->string('address_code', 8);
            $table->string('ken', 20);
            $table->string('town', 20);
            $table->string('number', 5);
            $table->string('builld', 30);
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
