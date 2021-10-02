<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIteamLeasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iteam_leaseds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('item_id');
            $table->bigInteger('renter_id');
            $table->timestamp('time_from');
            $table->timestamp('time_to');
            $table->bigInteger('unit_id');
            $table->float('price_per_unit',10,2);
            $table->float('discount',8,2)->nullable()->default(0);
            $table->float('fee',8,2)->nullable()->default(0);
            $table->float('price_total',8,2);
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
        Schema::dropIfExists('iteam_leaseds');
    }
}
