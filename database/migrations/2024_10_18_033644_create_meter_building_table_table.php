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
        Schema::create('meter_building_table', function (Blueprint $table) {
            $table->integer('building_id')->key()->autoIncrement();
            $table->integer('site_idx');
            $table->string('building_code', 255);
            $table->string('building_description', 255);
            $table->integer('cut_off')->nullable()->default(NULL);
            $table->string('device_ip_range', 255)->nullable();
            $table->string('ip_network', 255)->nullable();
            $table->string('ip_netmask', 255)->nullable();
            $table->string('ip_gateway', 255)->nullable();
            $table->dateTime('created_at')->nullable()->default(NULL);
            $table->integer('created_by_user_idx')->nullable()->default(NULL);
            $table->dateTime('updated_at')->nullable()->default(NULL);
            $table->integer('modified_by_user_idx')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_building_table');
    }
};
