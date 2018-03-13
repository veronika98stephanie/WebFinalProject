<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateCatDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cat_details', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->uuid('cat_id')->unsigned();
            $table->string('key',100);
            $table->foreign('cat_id')->references('id')->on('categories');
        });
        DB::statement('ALTER TABLE cat_details ALTER COLUMN id SET DEFAULT uuid_generate_v4();');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cat_details');
    }
}
