<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->string('group')->index();        // general, hero, contact, social, footer, about, schedule
            $table->string('label');                  // Human-readable label for admin
            $table->text('value_en')->nullable();
            $table->text('value_bn')->nullable();
            $table->text('value_cn')->nullable();
            $table->string('type')->default('text');  // text, textarea, editor, image, file, url
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
