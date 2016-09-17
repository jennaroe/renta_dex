<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date');
            $table->string('invoiceNum');
            $table->string('buildingName');
            $table->string('buildingAddress');
            $table->string('repName');
            $table->string('tenantName');
            $table->string('unitNum');
            $table->string('moveInDate');
            $table->string('totalDue');
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
        //
    }
}