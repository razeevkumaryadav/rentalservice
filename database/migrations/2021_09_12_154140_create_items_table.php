<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('item_type_id');
            $table->bigInteger('location_id')->nullable();
            $table->bigInteger('owner_id');
            $table->float('price_per_unit',8,2);
            $table->bigInteger('unit_id')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(True);
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
        Schema::dropIfExists('items');
    }
}
