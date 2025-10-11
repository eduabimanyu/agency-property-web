<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'cta_text',
        'cta_link',
        'image'
    ];
}
