<?php

use Illuminate\Database\Seeder;

class PurchaseListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\PurchaseList::class, 5)->create();
    }
}
