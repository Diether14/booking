<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('building_id');
            $table->integer('landlord_id');
            $table->string('name');
            $table->integer('bathrooms');
            $table->integer('car_spaces');
            $table->longText('check_in_instructions');	
            $table->longText('check_out_instructions');
            $table->time('check_in_time');
            $table->time('check_out_time');
            $table->string('wifi_name');
            $table->string('wifi_password');
            $table->string('lock_box_code');
            $table->integer('nightly');
            $table->integer('weekly');
            $table->integer('monthly');
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
        Schema::dropIfExists('tbl_properties');
    }
}
