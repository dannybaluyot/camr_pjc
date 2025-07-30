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
        Schema::create('live_meter_data', function (Blueprint $table) {
            $table->integer('id')->key()->autoIncrement();
            $table->string('location', 30)->default('Home');
            $table->string('meter_id', 30);
            $table->dateTime('datetime');
            $table->double('vrms_a');
            $table->double('vrms_b');
            $table->double('vrms_c');
            $table->double('irms_a');
            $table->double('irms_b');
            $table->double('irms_c');
            $table->double('freq');
            $table->double('pf');
            $table->double('watt');
            $table->double('va');
            $table->double('var');
            $table->double('wh_del');
            $table->double('wh_rec');
            $table->double('wh_net');
            $table->double('wh_total');
            $table->double('varh_neg');
            $table->double('varh_pos');
            $table->double('varh_net');
            $table->double('varh_total');
            $table->double('vah_total');
            $table->double('max_rec_kw_dmd');
            $table->dateTime('max_rec_kw_dmd_time')->nullable()->default(NULL);
            $table->double('max_del_kw_dmd');
            $table->dateTime('max_del_kw_dmd_time')->nullable()->default(NULL);
            $table->double('max_pos_kvar_dmd');
            $table->dateTime('max_pos_kvar_dmd_time')->nullable()->default(NULL);
            $table->double('max_neg_kvar_dmd');
            $table->dateTime('max_neg_kvar_dmd_time')->nullable()->default(NULL);
            $table->double('v_ph_angle_a');
            $table->double('v_ph_angle_b');
            $table->double('v_ph_angle_c');
            $table->double('i_ph_angle_a');
            $table->double('i_ph_angle_b');
            $table->double('i_ph_angle_c');
            $table->text('mac_addr');
            $table->text('soft_rev');
            $table->integer('relay_status');
        });

        DB::statement("ALTER TABLE `live_meter_data` CHANGE COLUMN `id` `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT FIRST;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('live_meter_data');
    }
};
