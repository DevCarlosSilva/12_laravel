<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'found_date',
        'status',
        'return_date',
        'returned_to',
        'categories_id',
        'locations_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }

    public function location()
    {
        return $this->belongsTo(Location::class, 'locations_id');
    }
}
