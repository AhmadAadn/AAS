<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('Eid');
            $table->string('name');
            $table->string('dep');
            $table->string('phone');
            $table->string('email');
            $table->string('Pemail');
            $table->string('password');
            $table->timestamps();
            $table->integer('Advisor_id')->unsigned()->nullable();
            $table->foreign('Advisor_id')->references('id')->on('advisors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
}
