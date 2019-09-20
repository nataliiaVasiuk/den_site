<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectMediaFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_media_files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->unsignedInteger('id_project');
            $table->string('src');
            $table->text('description');

            $table->index('id_project');
            $table->foreign('id_project')->references('id')->on('projects')->onDelete('cascade');
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
        Schema::dropIfExists('project_media_files');
    }
}
