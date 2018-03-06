<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;
    protected $table = 'items';
    protected $fillable = ['cat_id', 'qty', 'name', 'summary', 'price', 'imgUrl'];
}
