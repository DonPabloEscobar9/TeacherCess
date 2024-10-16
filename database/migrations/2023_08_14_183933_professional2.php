<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('professional2', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('year')->nullable();
            $table->string('excellent')->nullable();
            $table->string('verygood')->nullable();
            $table->string('good')->nullable();
            $table->string('average')->nullable();
            $table->string('poor')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional2');
    }
};
