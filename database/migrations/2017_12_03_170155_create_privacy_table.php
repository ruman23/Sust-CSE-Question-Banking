<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivacyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('privacy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ques_id')->unsigned();
            $table->foreign('ques_id')->references('id')->on('questions')->onDelete('cascade');
            $table->integer('status')->default(0);
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
        Schema::drop('privacy');
    }
}
