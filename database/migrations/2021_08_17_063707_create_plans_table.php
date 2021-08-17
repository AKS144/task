<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->integer('subcat_id',11);
            $table->string('name');
            $table->longText('description');
            $table->integer('total_workouts',12);
            $table->string('workouts_description');
            $table->integer('avg_duration',11);
            $table->enum('duration_unit',['Hrs','Mins'])->default('Hrs');
            $table->integer('total_weeks',11);
            $table->string('image');
            $table->enum('level',['Beginner','Intermediate','Advance']);
            $table->enum('status',['0','1'])->default('1');
            $table->softDeletes();
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
        Schema::dropIfExists('plans');
    }
}
