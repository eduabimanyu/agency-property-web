<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'property_category_id',
        'price',
        'location',
        'bedrooms',
        'bathrooms',
        'land_area',
        'building_area',
        'status',
        'image'
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function propertyCategory()
    {
        return $this->belongsTo(PropertyCategory::class);
    }

    public function brochures()
    {
        return $this->hasMany(Brochure::class);
    }

    public function brochureRequests()
    {
        return $this->hasMany(BrochureRequest::class);
    }
    
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($property) {
            if (empty($property->slug)) {
                $property->slug = Str::slug($property->name);
            }
        });
    }
}
