<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billingdetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'state',
        'city',
        'firstname',
        'lastname',
        'address',
        'zipcode',
        'phonenumber',
        'emailaddress'
    ];
}
