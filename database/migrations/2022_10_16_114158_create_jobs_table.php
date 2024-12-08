<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_code');
            $table->string('job_slug');
            $table->string('job_position');
            $table->string('job_address');
            $table->double('job_salary', 12, 2)->default(0);
            $table->string('job_major');
            $table->text('job_description');
            $table->json('job_requirements');
            $table->string('job_type');
            $table->text('job_specialization');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
