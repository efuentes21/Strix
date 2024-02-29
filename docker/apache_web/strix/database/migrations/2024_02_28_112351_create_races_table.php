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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('unevenness');
            $table->string('map');
            $table->integer('max_competitors');
            $table->decimal('distance');
            $table->date('date');
            $table->timestamp('time');
            $table->string('start');
            $table->string('promotion');
            $table->decimal('sponsorship');
            $table->decimal('inscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
