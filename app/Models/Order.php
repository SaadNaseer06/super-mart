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
        'price',
        'quantity',
        'status',
    ];
    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'order_id', 'id');
    }

}
