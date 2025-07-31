<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUsageTypeToMeterDetailsTable extends Migration
{
    public function up()
    {
        Schema::table('meter_details', function (Blueprint $table) {
            $table->string('usage_type', 20)->default('Electric Meter')->after('meter_role');
        });
    }

    public function down()
    {
        Schema::table('meter_details', function (Blueprint $table) {
            $table->dropColumn('usage_type');
        });
    }
}