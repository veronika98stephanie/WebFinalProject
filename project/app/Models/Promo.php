<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'promos';
    protected $fillable = ['imgUrl'];
}
