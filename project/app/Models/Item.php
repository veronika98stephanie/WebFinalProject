<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'items';
    protected $fillable = ['cat_id', 'qty', 'name', 'summary', 'price', 'imgUrl'];
}
