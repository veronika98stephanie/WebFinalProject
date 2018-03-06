<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseList extends Model
{
    public $timestamps = false;
    protected $table = 'purchase_lists';
    protected $fillable = ['purchaseId','itemId','qty'];
}
