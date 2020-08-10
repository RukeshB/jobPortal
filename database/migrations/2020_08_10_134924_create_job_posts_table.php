<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jobprovider_id')->unsigned();
            $table->foreign('jobprovider_id')->references('id')->on('users');
            $table->string('post');
            $table->bigInteger('salary');
            $table->integer('experience');
            $table->integer('no_of_vacant_position');
            $table->string('qualification');
            $table->string('heading');
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
        Schema::dropIfExists('job_posts');
    }
}
