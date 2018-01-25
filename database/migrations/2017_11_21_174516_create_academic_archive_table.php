<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicArchiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('academic_archive', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
          $table->string('subject', 100);
          $table->string('semester', 25);
          $table->string('session', 25);
          $table->string('teacher', 50);
          $table->string('type', 20);
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
       Schema::drop('academic_archive');
    }
}
