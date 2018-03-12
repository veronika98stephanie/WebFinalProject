<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'name', 'email', 'password',
        'accessToken', 'address', 'phone'
    ];

    public function cart(){
        $this->hasOne('Cart');
    }
}
