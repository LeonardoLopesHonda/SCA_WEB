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
        Schema::create('decision_areas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('label', 15);
            $table->longText('description');
            $table->integer('importancy')->default(5);
            $table->integer('urgency')->default(5);
            $table->boolean('isFocused')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decision_areas');
    }
};
