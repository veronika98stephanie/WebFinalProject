<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatDetail extends Model
{
    public $timestamps = false;
    protected $table = 'cat_details';
    protected $fillable = ['cat_id', 'key'];
}
