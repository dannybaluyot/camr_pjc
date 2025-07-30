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
        Schema::create('load_profile', function (Blueprint $table) {
            $table->integer('id')->key()->autoIncrement();
            $table->text('meter_id');
            $table->text('datetime')->nullable()->default(NULL);
            $table->text('event_id');
            $table->float('ch_1')->comment('1.5.0_kW');
            $table->double('ch_2')->comment('1-1:1.30.2_kWh');
            $table->double('ch_3')->comment('1-1:3.30.2_kvarh');
            $table->double('ch_4')->comment('2.5.0_kW');
            $table->double('ch_5')->comment('1-1:2.30.2_kWh');
            $table->double('ch_6')->comment('1-1:4.30.2_kvarh');
            $table->double('ch_7');
            $table->double('ch_8');
            $table->timestamp('time_import')->useCurrent();
        });

        DB::statement("ALTER TABLE `load_profile` CHANGE COLUMN `id` `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT FIRST;");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('load_profile');
    }
};
