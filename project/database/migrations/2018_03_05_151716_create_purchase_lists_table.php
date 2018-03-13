<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreatePurchaseListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_lists', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('purchaseId')->unsigned();
            $table->uuid('itemId')->unsigned();
            $table->integer('qty');
            $table->foreign('purchaseId')->references('id')->on('purchases');
            $table->foreign('itemId')->references('id')->on('items');
        });
        DB::statement('ALTER TABLE purchase_lists ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_lists');
    }
}
