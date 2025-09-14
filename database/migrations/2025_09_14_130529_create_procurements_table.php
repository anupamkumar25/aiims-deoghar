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
        Schema::create('procurements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('type'); // tender, quotation, gem
            $table->string('reference_number')->nullable();
            $table->decimal('estimated_value', 15, 2)->nullable();
            $table->date('opening_date');
            $table->date('closing_date');
            $table->string('file_path')->nullable();
            $table->string('status')->default('active'); // active, closed, cancelled
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('procurements');
    }
};
