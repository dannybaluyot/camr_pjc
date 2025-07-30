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
        Schema::create('user_tb', function (Blueprint $table) {
            $table->integer('user_id')->key()->autoIncrement();
            $table->text('user_id_sap')->default('N/A');
            $table->string('user_name', 100);
            $table->string('user_real_name', 100);
            $table->string('user_job_title', 100)->nullable()->default(NULL);
            $table->string('user_password', 255);
            $table->string('user_type', 100);
            $table->date('user_expiration')->default('9999-12-31');
            $table->string('user_list_src', 100)->default('AMR');
            $table->string('user_access', 100)->default('Selected')->comment('All/Selected if all user will have an access to all site ,  if Selected only assigned site to user');
            $table->string('user_email_address', 100)->nullable()->default(NULL);
            $table->text('user_site_list_ids')->nullable();
            $table->dateTime('created_at')->nullable()->default(NULL);
            $table->integer('created_by_user_idx');
            $table->dateTime('updated_at')->nullable()->default(NULL);
            $table->integer('modified_by_user_idx')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tb');
    }
};
