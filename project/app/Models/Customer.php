<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'customers';
    protected $fillable = ['clientId','paymentMethodId','statusId','date'];
}
