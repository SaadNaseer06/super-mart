<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Product extends Model
{
    use HasFactory;
    Protected $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'image'
    ];
}
