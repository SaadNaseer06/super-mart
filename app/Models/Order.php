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
        'firstname',
        'lastname',
        'company',
        'address',
        'appartment',
        'city',
        'counntry',
        'postal_code', 
        'quantity' 
    ];
    public function products()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
