<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundperformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fundperformance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fund_name');
            $table->date('nav_as_on');
            $table->float('nav_per_unit');
            $table->float('investor_buy_Price');
            $table->float('investor_sale_price');
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
        Schema::dropIfExists('fundperformance');
    }
}
