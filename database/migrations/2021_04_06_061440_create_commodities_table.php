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
        Schema::create('commodity_types', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name', 50);
            $table->timestamps();
        });
        
        Schema::create('commodity_units', function (Blueprint $table) {
            $table->id()->index();
            $table->string('name', 50);
            $table->string('desc', 50);
            
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('commodities', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('code', 50);
            $table->foreignId('type_id')->references('id')->on('commodity_types');
            $table->foreignId('unit_id')->references('id')->on('commodity_units');
            $table->integer('sell_price')->default(0);
            $table->integer('purchase_price')->default(0);
            $table->integer('stock')->default(0);

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
        Schema::dropIfExists('commodity_types');
        Schema::dropIfExists('commodity_units');
        Schema::dropIfExists('commodities');
    }
}
