<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->enum('type', ['lawyer', 'accountant']);
            $table->boolean('freelancer'); // true if freelancer, false if company employee
            $table->foreignId('company_id')->nullable()->constrained('companies');
            $table->string('name_en');
            $table->string('name_ar');
            $table->string('job_title_en')->nullable(); // for lawyers
            $table->string('job_title_ar')->nullable(); // for lawyers
            $table->string('description_en')->nullable(); // for accountants
            $table->string('description_ar')->nullable(); // for accountants
            $table->integer('years_of_experience')->nullable();
            $table->text('info_en')->nullable();
            $table->text('info_ar')->nullable();
            $table->foreignId('country_id')->constrained('countries');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
