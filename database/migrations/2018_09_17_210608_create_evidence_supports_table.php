<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvidenceSupportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence_supports', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('evidence_id');
            $table->unsignedInteger('support_type_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('evidence_id')->references('id')->on('evidences');
            $table->foreign('support_type_id')->references('id')->on('support_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidence_supports');
    }
}
