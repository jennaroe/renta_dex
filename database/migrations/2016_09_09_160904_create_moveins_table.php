<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateMoveinsTable extends Migration
{
    // *
    //  * Run the migrations.
    //  *
    //  * @return void
     
    public function up()
    {
        Schema::create('moveIns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clientName');
            $table->string('building');
            $table->string('unitNum');
            $table->string('moveInDate');
            $table->string('rentalRate');
            $table->string('Commission');
            $table->string('Status');
            $table->string('listingAgent');
            $table->text('notes');
            // $table->timestamps();
        });    
}
    // *
    //  * Reverse the migrations.
    //  *
    //  * @return void
     
    public function down()
    {
        Schema::drop("moveIns");
    }
}

