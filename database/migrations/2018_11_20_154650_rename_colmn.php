<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColmn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('order', function (Blueprint $table) {
          $table->renameColumn('bland_id', 'brand_id');
				});
				Schema::table('product_codename', function (Blueprint $table) {
          $table->renameColumn('bland_id', 'brand_id');
				});
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
        Schema::table('order', function (Blueprint $table) {
          $table->renameColumn('brand_id', 'bland_id');
				});
				Schema::table('product_codename', function (Blueprint $table) {
          $table->renameColumn('brand_id', 'bland_id');
				});
				Schema::table('brand', function (Blueprint $table) {
          $table->renameColumn('address_city', 'addres_city');
          $table->renameColumn('address_town', 'addres_town');
          $table->renameColumn('address_build', 'addres_bild');
        });
    }
}
