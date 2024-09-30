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
        Schema::create('medicines_stocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('medicines_id')->nullable();
            $table->string('batch_id')->nullable();
            $table->date('expierd_at')->nullable();
            $table->string('quantity')->nullable();
            $table->string('mrp')->nullable();
            $table->string('rate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines_stocks');
    }
};
