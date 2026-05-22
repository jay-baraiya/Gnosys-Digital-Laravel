<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    protected $fillable = [
        'page_slug',
        'section_slug',
        'title',
        'subtitle',
        'content',
        'image_url',
        'button_text',
        'button_link',
        'is_active',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeForPage($query, $pageSlug)
    {
        return $query->where('page_slug', $pageSlug);
    }

    public static function getSection($pageSlug, $sectionSlug)
    {
        return self::where('page_slug', $pageSlug)
            ->where('section_slug', $sectionSlug)
            ->first();
    }
}
