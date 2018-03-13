<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDetail extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'cat_details';
    protected $fillable = ['cat_id', 'key'];
}
