<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description', 1000);
            $table->string('url', 500);
            $table->timestamps();
            $table->unsignedInteger('finding_id');

            // Foreign keys
            $table->foreign('finding_id')->references('id')->on('findings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidences');
    }
}
