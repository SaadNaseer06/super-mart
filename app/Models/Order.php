<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'user_id',
        'cart_id',
        'firstname',
        'lastname',
        'email',
        'contact',
        'fax',
        'company',
        'address',
        'postalcode', 
        'appartment',
        'city',
        'country',
        'state',
        'price'
        // 'quantity' 
    ];
    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
