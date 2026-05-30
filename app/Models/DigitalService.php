<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DigitalService extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'description_top_blocks',
        'service_features_grid',
        'process_steps',
        'detailed_description',
        'price',
        'badge',
        'slug',
        'category',
        'subcategory',
        'image_url',
        'features',
        'category_id',
        'is_active',
        'sort_order',
        'tags',
        'gallery',
        'product_type',
        'product_data',
        'visibility',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'visibility' => 'boolean',
        'features' => 'array',
        'description_top_blocks' => 'array',
        'service_features_grid' => 'array',
        'process_steps' => 'array',
        'tags' => 'array',
        'gallery' => 'array',
        'product_data' => 'array',
    ];

    public function categoryRelationship()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function scopeBySubcategory($query, $subcategory)
    {
        return $query->where('subcategory', $subcategory);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }

    public function getPriceDisplayAttribute()
    {
        if ($this->packages()->exists()) {
            $prices = $this->packages()->pluck('price')->map(function ($price) {
                if (empty($price)) return null;
                $cleanPrice = preg_replace('/[^\d.]/', '', $price);
                return is_numeric($cleanPrice) ? (float)$cleanPrice : null;
            })->filter(function ($value) {
                return !is_null($value);
            });

            if ($prices->isNotEmpty()) {
                $minPrice = $prices->min();
                $maxPrice = $prices->max();
                if ($minPrice == $maxPrice) {
                    return '$' . ($minPrice == (int)$minPrice ? (int)$minPrice : number_format($minPrice, 2));
                }
                $minStr = $minPrice == (int)$minPrice ? (int)$minPrice : number_format($minPrice, 2);
                $maxStr = $maxPrice == (int)$maxPrice ? (int)$maxPrice : number_format($maxPrice, 2);
                return '$' . $minStr . ' - $' . $maxStr;
            }
        }

        if ($this->price) {
            $cleanPrice = preg_replace('/[^\d.]/', '', $this->price);
            if (is_numeric($cleanPrice)) {
                $p = (float)$cleanPrice;
                return '$' . ($p == (int)$p ? (int)$p : number_format($p, 2));
            }
            return $this->price;
        }

        return 'Contact for Price';
    }

    public function packages()
    {
        return $this->hasMany(Package::class, 'digital_service_id');
    }
}
