<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriaSupportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_support', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('support_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('support_id')->references('id')->on('supports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criteria_support');
    }
}
