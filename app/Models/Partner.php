<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name_en', 'name_bn', 'name_cn',
        'designation_en', 'designation_bn', 'designation_cn',
        'credentials', 'email', 'linkedin', 'photo',
        'bio_en', 'bio_bn', 'bio_cn',
        'is_active', 'order',
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
