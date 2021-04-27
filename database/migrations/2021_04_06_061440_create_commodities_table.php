<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('code', 50);
            $table->foreignId('type_id');
            $table->foreignId('unit_id');
            $table->integer('sell_price');
            $table->integer('purchase_price');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('commodity_stocks', function (Blueprint $table) {
            $table->foreignId('commodity_id');
            $table->foreignId('warehouse_id');
            $table->integer('stocks');
            $table->timestamps();
        });

        Schema::create('commodity_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->timestamps();
        });

        Schema::create('commodity_units', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('desc', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commodities');
        Schema::dropIfExists('commodity_stocks');
        Schema::dropIfExists('commodity_types');
        Schema::dropIfExists('commodity_units');
    }
}
