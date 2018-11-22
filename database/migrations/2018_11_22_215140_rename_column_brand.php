<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brand', function (Blueprint $table) {
            $table->renameColumn('addres_city', 'address_city');
            $table->renameColumn('addres_town', 'address_town');
            $table->renameColumn('addres_bild', 'address_build');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brand', function (Blueprint $table) {
            $table->renameColumn('address_city', 'addres_city');
            $table->renameColumn('address_town', 'addres_town');
            $table->renameColumn('address_bild', 'addres_bild');
        });
    }
}
