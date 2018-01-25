<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('user_activities',function(Blueprint $table)
         {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('helper_user_id')->unsigned();
            $table->foreign('helper_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('questions')->onDelete('cascade');
            $table->integer('activity')->default(0);

         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_activitys');
    }
}
