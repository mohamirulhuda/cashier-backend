<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->foreignId('transaction_type_id');
            $table->date('date');
            $table->foreignId('user_id');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('transaction_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });
        
        Schema::create('transaction_sales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_code');
            $table->string('customer');
            $table->integer('cost');
            $table->integer('discount')->nullable();
            $table->integer('debt')->nullable();
            $table->integer('payout');
            
            $table->timestamps();
        });

        Schema::create('transaction_restocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_code');
            $table->foreignId('supplier_id');

            $table->timestamps();
        });

        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('transaction_code');
            $table->foreignId('commodity_id');
            $table->integer('in')->nullable();
            $table->integer('out')->nullable();
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
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('transaction_types');
        Schema::dropIfExists('transaction_sales');
        Schema::dropIfExists('transaction_restocks');
        Schema::dropIfExists('transaction_details');
    }
}
