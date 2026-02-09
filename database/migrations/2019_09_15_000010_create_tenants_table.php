<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->string('id')->primary();

            // Company branding
            $table->string('company_name')->default('BOOT CORPORATION');
            $table->string('company_tagline')->default('Chartered Accountants');
            $table->string('logo_letter', 5)->default('B');

            // Contact info
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('email_1')->nullable();
            $table->string('email_2')->nullable();
            $table->text('address')->nullable();
            $table->text('map_embed_url')->nullable();

            // Social links
            $table->string('social_linkedin')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_youtube')->nullable();

            // Footer
            $table->text('footer_description')->nullable();

            // Status
            $table->boolean('is_active')->default(true);

            $table->timestamps();
            $table->json('data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
}
