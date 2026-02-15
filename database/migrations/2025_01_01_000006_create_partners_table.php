<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('name_cn')->nullable();
            $table->string('designation_en')->nullable();
            $table->string('designation_bn')->nullable();
            $table->string('designation_cn')->nullable();
            $table->string('credentials')->nullable();     // e.g. FCA (ICAB, ICAEW), FCCA
            $table->string('email')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('photo')->nullable();
            $table->longText('bio_en')->nullable();
            $table->longText('bio_bn')->nullable();
            $table->longText('bio_cn')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partners');
    }
};
