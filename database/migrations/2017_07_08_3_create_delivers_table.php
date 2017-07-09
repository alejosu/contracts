<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->enum('type',['order','ticket']);
            $table->decimal('qty',20,2);
            $table->date('transDate');
            $table->decimal('unitValue',20,2);

            $table->integer('contracts_id')->unsigned();

            $table->foreign('contracts_id')
                    ->references('id')
                    ->on('contracts')
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
        Schema::dropIfExists('delivers');
    }
}
