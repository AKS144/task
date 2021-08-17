<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id')->length('10');
            $table->double('price',10,2);
            $table->string('name');
            $table->string('short_description');
            $table->date('date');
            $table->string('duration', 10);
            $table->integer('member_limit', 11);
            $table->enum('class_level', ['Beginner', 'Intermediate', 'Advance']);
            $table->longText('description');
            $table->text('benefits');
            $table->text('cover');
            $table->text('trainer');
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
        Schema::dropIfExists('classes');
    }
}
