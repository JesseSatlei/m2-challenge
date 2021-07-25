<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->increments('group_id');
            $table->string('name');
            $table->integer('campaign_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('group', function (Blueprint $table) {
            $table->foreign('campaign_id')->references('campaign_id')->on('campaign')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group');
    }
}
