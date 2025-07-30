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
        Schema::create('meter_data', function (Blueprint $table) {
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
            $table->timestamp('dt')->nullable()->useCurrent();
            $table->integer('genset_status')->nullable()->default(NULL);
            $table->index(['meter_id', 'datetime', 'location']);
        });

        DB::statement("ALTER TABLE `meter_data` CHANGE COLUMN `id` `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT FIRST;");
        DB::statement("ALTER TABLE `meter_data` ADD INDEX `meter_data_index` (`meter_id`, `datetime`, `location`);");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_data');
    }
};
