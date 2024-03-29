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
        Schema::create('faculties', function (Blueprint $table) {
            $table->id('Emp_No');
            $table->string('Name');
            $table->string('Email');
            $table->date('DOB')->nullable();
            $table->date('DOJ')->nullable();
            $table->string('password');
            $table->string('contact');
            $table->enum('gender',['Male','Female','Other']);
            $table->text('address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculties');
    }
};
