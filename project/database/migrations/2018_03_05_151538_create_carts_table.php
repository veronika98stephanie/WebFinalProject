<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('clientId')->unsigned();
            $table->uuid('itemId')->unsigned();
            $table->integer('qty');
            $table->foreign('clientId')->references('id')->on('clients');
            $table->foreign('itemId')->references('id')->on('items');
        });
        DB::statement('ALTER TABLE carts ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
