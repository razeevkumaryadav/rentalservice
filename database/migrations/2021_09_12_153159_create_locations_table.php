<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('building_no');
            $table->string('street_no')->nullable();
            $table->string('street_name');
            $table->string('chowk_name');
            $table->string('zipcode')->nullable();
            $table->string('city');
            $table->string('state');
            $table->decimal('longitude',8,6);
            $table->decimal('latitude',8,6);
            // $table->decimal('foo', 5, 4);
            $table->bigInteger('country_id');
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
        Schema::dropIfExists('locations');
    }
}
