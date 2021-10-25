<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('job_title');
            $table->string('department');
            $table->integer('salary_from');
            $table->integer('salary_to');
            $table->string('job_description');
            $table->string('job_location');
            $table->string('seniority_level');
            $table->string('employment_type');
            $table->string('experience');
            $table->boolean('published');
            $table->date('expiry_date')->default(Carbon::now()->addYear(10)->toDateTimeString());
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
}
