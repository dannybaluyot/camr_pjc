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
        Schema::create('meter_company_table', function (Blueprint $table) {
            $table->integer('company_id')->key()->autoIncrement();
            $table->string('company_code', 255)->nullable()->default(NULL);
            $table->string('company_name', 255);
            $table->integer('created_by_user_idx');
            $table->dateTime('created_at')->nullable()->default(NULL);
            $table->integer('modified_by_user_idx')->nullable();
            $table->dateTime('updated_at')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_company_table');
    }
};
