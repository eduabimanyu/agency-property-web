<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brochure extends Model
{
    protected $fillable = [
        'title',
        'description',
        'file_path',
        'property_id'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
