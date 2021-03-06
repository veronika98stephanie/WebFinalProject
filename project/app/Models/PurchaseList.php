<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseList extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'purchase_lists';
    protected $fillable = ['purchaseId','itemId','qty'];
}
