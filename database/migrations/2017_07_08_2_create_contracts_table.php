<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('contract',20);
            $table->date('iniDate');
            $table->date('endDate');
            $table->decimal('amountTotal',20,2);
            $table->decimal('balance',20,2);

            $table->integer('customer_id')->unsigned();

            $table->foreign('customer_id')
                    ->references('id')
                    ->on('customers')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
