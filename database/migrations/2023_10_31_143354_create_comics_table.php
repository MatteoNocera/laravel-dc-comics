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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->string('title', 50);
            $table->text('description')->nullable();
            $table->string('thumb', 100)->nullable();
            $table->decimal('price', 5, 2);
            $table->string('series', 100)->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type', 20)->nullable();
            $table->string('artists');
            $table->string('writers');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
