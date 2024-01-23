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
        Schema::create('colours', function (Blueprint $table) {
            $table->id();
            $table->string('Navbar_background');
            $table->string('Heading_background');
            $table->string('Navbar_text');
            $table->string('Heading_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('colours');
    }
};
