<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_features', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id');
            $table->boolean('wifi')->nullable()->default(false);
            $table->boolean('drinking_water')->nullable()->default(false);
            // $table->bigInteger('parking_lot_id')->nullable();
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
        Schema::dropIfExists('extra_features');
    }
}
