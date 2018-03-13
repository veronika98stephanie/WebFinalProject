<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

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
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('clientId')->unsigned();
            $table->uuid('paymentMethodId')->unsigned();
            $table->uuid('statusId')->unsigned();
            $table->date('date');
            $table->foreign('clientId')->references('id')->on('clients');
            $table->foreign('paymentMethodId')->references('id')->on('payment_methods');
            $table->foreign('statusId')->references('id')->on('statuses');
        });
        DB::statement('ALTER TABLE customers ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
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
