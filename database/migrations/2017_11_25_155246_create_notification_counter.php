<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationCounter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification_counter',function(Blueprint $table)
        {
           $table->increments('id');
           $table->integer('user_id')->unsigned();
           $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
           $table->integer('count')->default(0);
           $table->integer('last_activity')->unsigned();
           $table->foreign('last_activity')->references('id')->on('user_activities')->onDelete('cascade');
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
        Schema::drop('notification_counter');
    }
}
