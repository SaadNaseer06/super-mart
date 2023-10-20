<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Product extends Model
{
    use HasFactory, Searchable;

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'price'  => $this->price,
            'description'  => $this->description,
        ];
    }
    Protected $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'image'
    ];
}
