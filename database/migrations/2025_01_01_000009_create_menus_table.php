<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('menus')->cascadeOnDelete();
            $table->string('title_en');
            $table->string('title_bn')->nullable();
            $table->string('title_cn')->nullable();
            $table->string('url')->nullable();
            $table->string('route_name')->nullable();      // Laravel route name
            $table->string('target')->default('_self');     // _self or _blank
            $table->string('icon')->nullable();             // FontAwesome icon class
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
