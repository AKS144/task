<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembershipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership', function (Blueprint $table) {
            $table->bigIncrements('id',12);
            $table->string('name');
            $table->integer('duration',11);
            $table->text('classes');
            $table->float('price',11,2);
            $table->integer('discount_percentage',3)->default('0');
            $table->text('offer_name');
            $table->enum('ststus',['0','1']);
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
        Schema::dropIfExists('membershipr');
    }
}
