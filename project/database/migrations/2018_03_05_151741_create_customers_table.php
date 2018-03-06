<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clientId')->unsigned();
            $table->integer('paymentMethodId')->unsigned();
            $table->integer('statusId')->unsigned();
            $table->date('date');
            $table->foreign('clientId')->references('id')->on('clients');
            $table->foreign('paymentMethodId')->references('id')->on('payment_methods');
            $table->foreign('statusId')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
