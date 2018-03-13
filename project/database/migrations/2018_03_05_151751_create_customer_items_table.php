<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCustomerItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_items', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('customerId')->unsigned();
            $table->uuid('itemId')->unsigned();
            $table->integer('qty');
            $table->foreign('customerId')->references('id')->on('customers');
            $table->foreign('itemId')->references('id')->on('items');
        });
        DB::statement('ALTER TABLE customer_items ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_items');
    }
}
