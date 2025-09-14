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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('department')->nullable();
            $table->string('position_type'); // faculty, non-faculty, contractual, etc.
            $table->string('qualification')->nullable();
            $table->string('experience')->nullable();
            $table->integer('vacancies')->default(1);
            $table->date('application_start_date');
            $table->date('application_end_date');
            $table->string('file_path')->nullable(); // for detailed advertisement
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
