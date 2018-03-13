<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerItem extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'customer_items';
    protected $fillable = ['customerId','itemId','qty'];
}
