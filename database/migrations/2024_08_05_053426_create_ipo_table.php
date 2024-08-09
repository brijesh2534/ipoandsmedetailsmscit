<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipo', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('gmp');
            $table->date('open_date');
            $table->date('close_date');
            $table->date('allotment_date');
            $table->date('listing_date');
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
        Schema::dropIfExists('ipo');
    }
}
