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
        Schema::create('meter_site', function (Blueprint $table) {
            $table->integer('site_id')->key()->autoIncrement();
            $table->integer('division_idx')->comment('The Value of this column is from division_table');
            $table->integer('company_idx')->comment('The Value of this column is from company_table');
            $table->integer('building_idx')->nullable()->default(0)->comment('The Value of this column is from meter_building_table');
            $table->string('site_code', 100)->nullable()->default(NULL)->comment('Building Code as Site Code');
            $table->integer('created_by_user_idx');
            $table->dateTime('created_at')->nullable()->default(NULL);
            $table->integer('modified_by_user_idx')->nullable()->default(0);
            $table->dateTime('updated_at')->nullable()->default(NULL);
            $table->dateTime('last_log_update')->nullable()->default(NULL);
            $table->string('deleted_at', 50)->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_site');
    }
};
