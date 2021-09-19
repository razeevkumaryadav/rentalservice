<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyDetailesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_detailes', function (Blueprint $table) {
            $table->id();
            $table->string('no_room')->nullable();
            $table->string('no_bed_room')->nullable();
            $table->string('no_living_room')->nullable();
            $table->string('no_bathroom')->nullable();
            $table->string('no_kitchen')->nullable();
            $table->string('storage')->nullable();
            $table->string('area')->nullable();
            $table->string('road_size')->nullable();
            $table->string('road_type')->nullable();
            $table->bigInteger('item_id');
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
        Schema::dropIfExists('property_detailes');
    }
}
