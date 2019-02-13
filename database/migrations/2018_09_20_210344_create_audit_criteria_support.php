<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditCriteriaSupport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_criteria_support', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('audit_criteria_id');
            $table->unsignedInteger('criteria_support_id');
            $table->timestamps();

            //Foreign key
            $table->foreign('audit_criteria_id')->references('id')->on('audit_criteria');
            $table->foreign('criteria_support_id')->references('id')->on('criteria_support');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_criteria_support');
    }
}
