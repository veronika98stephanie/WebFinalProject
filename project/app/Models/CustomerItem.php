<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerItem extends Model
{
    public $timestamps = false;
    protected $table = 'customer_items';
    protected $fillable = ['customerId','itemId','qty'];
}
