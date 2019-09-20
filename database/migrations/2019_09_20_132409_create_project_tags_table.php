<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_tag')->si;
            $table->unsignedInteger('id_project');

            $table->index('id_tag');
            $table->index('id_project');

            $table->foreign('id_tag')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::dropIfExists('project_tag');
    }
}
