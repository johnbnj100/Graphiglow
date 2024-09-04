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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('KORD');
            $table->string('SORD');
            $table->string('201');
            $table->string('GTO');
            $table->string('Graduation');
            $table->string('Wedding');
            $table->string('Church');
            $table->string('Business');
            $table->string('Art-Paper');
            $table->string('Bond');
            $table->string('100gram');
            $table->string('80gram');
            $table->string('70gram');
            $table->string('60gram');
            $table->string('A5');
            $table->string('A4');
            $table->string('A3');
            $table->string('1-color');
            $table->string('2-color');
            $table->string('3-color');
            $table->string('4-color');
            $table->string('board');
            $table->string('spiral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
