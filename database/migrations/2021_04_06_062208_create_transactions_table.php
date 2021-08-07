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

        Schema::create('transaction_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('code')->index();
            $table->foreignId('transaction_type_id')->references('id')->on('transaction_types');
            $table->date('date');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('note')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('transaction_sales', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code')->references('code')->on('transactions');
            $table->foreignId('customer_id')->nullable()->references('id')->on('customers');
            $table->string('non_customer')->nullable();
            $table->integer('cost')->default(0);
            $table->integer('discount')->default(0);
            $table->integer('debt')->default(0);
            $table->integer('cash')->default(0);
            
            $table->timestamps();
        });

        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code')->references('code')->on('transactions');
            $table->string('commodity_id')->references('id')->on('commodities');
            $table->integer('first_stock')->nullable();
            $table->integer('in')->default(0);
            $table->integer('out')->default(0);
            $table->integer('last_stock')->nullable();
            $table->string('note')->nullable();

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
        Schema::dropIfExists('transaction_types');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('transaction_sales');
        Schema::dropIfExists('transaction_details');
    }
}
