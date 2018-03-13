<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('cat_id')->unsigned();
            $table->integer('qty');
            $table->string('name', 100);
            $table->mediumText('summary');
            $table->float('price');
            $table->mediumText('imgUrl');
            $table->foreign('cat_id')->references('id')->on('categories');
        });
        DB::statement('ALTER TABLE items ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
