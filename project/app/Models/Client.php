<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $casts = [
        'id' => 'string'
    ];
    protected $primaryKey = "id";
    protected $table = 'clients';
    public $incrementing = false;
    protected $fillable = [
        'name', 'email', 'password',
        'accessToken', 'address', 'phone'
    ];

    public function cart(){
        $this->hasOne('Cart');
    }
}
