<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Clear Table Data

        DB::table('jobs_listings')->truncate();
        Schema::table('jobs_listings', function (Blueprint $table) {
            $table->integer('salary');
            $table->string('tags')->nullable();
            $table->enum('job_type', ['full-time', 'Contract', 'Temporary', 'Intership', 'Volunteer', 'On-Call'])->default('Full-Time');
            $table->boolean('remote')->default(false);
            $table->string('requirements')->nullable();
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('zipcode')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            $table->string('company_name');
            $table->string('company_description');
            $table->string('company_logo')->nullable();
            $table->string('company_website')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs_listings', function (Blueprint $table) {
            $table->dropColumn([
                'salary', 'tags', 'job_type', 'remote', 'requirements', 'adderss', 'city', 'state', 'zipcode', 'contact_email',
                'contact_phone', 'compant_name', 'company_description', 'company_logo'
            ]);
        });
    }
};
