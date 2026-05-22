<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'description',
    ];

    public function products()
    {
        return $this->hasMany(DigitalProduct::class);
    }

    public function services()
    {
        return $this->hasMany(DigitalService::class);
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
