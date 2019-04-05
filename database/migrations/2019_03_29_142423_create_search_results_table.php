<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('search_results', function (Blueprint $table) {
            $table->bigIncrements('id');
              //variables to be stored in contact_us table
            $table->string('from');
            $table->string('to');
            $table->date('departure_date');
            $table->date('return_date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('price');
            $table->integer('passenger_number');
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
        Schema::dropIfExists('search_results');
    }
}
