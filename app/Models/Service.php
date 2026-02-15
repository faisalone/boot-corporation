<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'slug', 'title_en', 'title_bn', 'title_cn',
        'summary_en', 'summary_bn', 'summary_cn',
        'content_en', 'content_bn', 'content_cn',
        'icon', 'image', 'is_active', 'order',
    ];

    protected function casts(): array
    {
        return ['is_active' => 'boolean'];
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)->orderBy('order');
    }
}
