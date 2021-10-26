<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellingAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selling_agents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('agent_list');
            $table->text('address');
            $table->unsignedBigInteger('tab_id')->nullable();
            $table->foreign('tab_id')->references('id')->on('documents_tabs');
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
        Schema::dropIfExists('selling_agents');
    }
}
