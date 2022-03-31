<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'descripton',
        'product_code',
        'qty',
        'product_price',
        'product_image',
        'product_year',
        'status',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'product_year' => 'date',
    ];
}
