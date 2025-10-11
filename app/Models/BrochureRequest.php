<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BrochureRequest extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'property_id'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
