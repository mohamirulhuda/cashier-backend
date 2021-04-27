<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable();
            $table->string('contact_1', 50)->nullable();
            $table->string('contact_2', 50)->nullable();
            $table->text('address');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('commodity_supplier', function (Blueprint $table) {
            $table->foreignId('supplier_id');
            $table->foreignId('commodity_id');

            $table->primary(['supplier_id', 'commodity_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
        Schema::dropIfExists('commodity_supplier');
    }
}
