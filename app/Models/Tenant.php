<?php

namespace App\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    /**
     * Custom columns stored directly on the tenants table (not in `data` JSON).
     */
    public static function getCustomColumns(): array
    {
        return [
            'id',
            'company_name',
            'company_tagline',
            'logo_letter',
            'phone_1',
            'phone_2',
            'email_1',
            'email_2',
            'address',
            'map_embed_url',
            'social_linkedin',
            'social_facebook',
            'social_twitter',
            'social_youtube',
            'footer_description',
            'is_active',
        ];
    }

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Get settings as an array for views.
     */
    public function getSettings(): array
    {
        return [
            'company_name' => $this->company_name ?? 'BOOT CORPORATION',
            'company_tagline' => $this->company_tagline ?? 'Chartered Accountants',
            'logo_letter' => $this->logo_letter ?? 'B',
            'phone_1' => $this->phone_1 ?? '+880 2 48814429',
            'phone_2' => $this->phone_2 ?? '+880 1711 535 555',
            'email_1' => $this->email_1 ?? 'info@bootcorporation.com.bd',
            'email_2' => $this->email_2 ?? 'hanif@bootcorporation.com.bd',
            'address' => $this->address ?? 'Flat D1, House 35, Road 114, Gulshan 2, Dhaka 1212',
            'map_embed_url' => $this->map_embed_url ?? '',
            'social_linkedin' => $this->social_linkedin ?? '#',
            'social_facebook' => $this->social_facebook ?? '#',
            'social_twitter' => $this->social_twitter ?? '#',
            'social_youtube' => $this->social_youtube ?? '#',
            'footer_description' => $this->footer_description ?? 'Your trusted partner in tax, audit & consulting. We provide strategic financial solutions for business growth.',
        ];
    }
}
