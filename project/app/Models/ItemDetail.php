<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemDetail extends Model
{
    public $timestamps = false;
    protected $table = 'item_details';
    protected $fillable = ['item_id', 'key', 'value'];
}
