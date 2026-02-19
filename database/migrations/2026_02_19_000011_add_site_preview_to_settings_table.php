<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        if (! DB::table('settings')->where('key', 'site_preview')->exists()) {
            DB::table('settings')->insert([
                'key'      => 'site_preview',
                'group'    => 'general',
                'label'    => 'Site Preview Image',
                'type'     => 'image',
                'value_en' => '',
                'value_bn' => '',
                'value_cn' => '',
                'order'    => 5,
            ]);
        }
    }

    public function down(): void
    {
        // intentionally left blank — do not delete uploaded data
    }
};
