<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('month');
            $table->integer('day');
            $table->integer('year');
            $table->integer('stars');
            $table->string('reviewed_by');
            $table->string('project_title');
            $table->string('project_description');
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
         Schema::drop('review');
    }
}
