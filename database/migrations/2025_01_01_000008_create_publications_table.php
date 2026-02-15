<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->string('title_en');
            $table->string('title_bn')->nullable();
            $table->string('title_cn')->nullable();
            $table->text('summary_en')->nullable();
            $table->text('summary_bn')->nullable();
            $table->text('summary_cn')->nullable();
            $table->string('category')->nullable();        // tax-update, audit-insight, newsletter
            $table->string('file')->nullable();             // PDF or document
            $table->date('published_at')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
