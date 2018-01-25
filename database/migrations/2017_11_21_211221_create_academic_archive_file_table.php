<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicArchiveFileTable extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('academic_archive_file', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('foreign_id')->unsigned();

            $table->foreign('foreign_id')->references('id')->on('academic_archive')->onDelete('cascade');

          $table->string('file') ;

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
       Schema::drop('academic_archive_file');
    }
}
