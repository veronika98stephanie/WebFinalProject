<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'carts';
    protected $fillable = ['clientId', 'itemId', 'qty'];

    public function client(){
        $this->hasOne('Client', 'clientId');
    }

    public function cartItem(){
        $this->hasOne('Item', 'itemId');
    }
}
