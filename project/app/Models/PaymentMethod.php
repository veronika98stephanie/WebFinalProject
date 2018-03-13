<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'payment_methods';
    protected $fillable = ['name'];
}
