<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'description',
        'reporter_name',
        'report_date',
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
