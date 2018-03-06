<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    public $timestamps = false;
    protected $table = 'promos';
    protected $fillable = ['imgUrl'];
}
