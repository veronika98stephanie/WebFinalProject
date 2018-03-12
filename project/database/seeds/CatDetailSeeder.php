<?php

use Illuminate\Database\Seeder;

class CatDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\CatDetail::class, 10)->create();
    }
}
