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
        Schema::create('meter_configuration_file', function (Blueprint $table) {
            $table->integer('config_id')->key()->autoIncrement();
            $table->text('meter_model');
            $table->text('config_file');
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
        Schema::dropIfExists('meter_configuration_file');
    }
};
