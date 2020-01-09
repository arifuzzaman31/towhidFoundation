<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQueryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_query', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_id');
            $table->string('name');
            $table->string('phone')->nullable();
            $table->longText('address');
            $table->longText('message')->nullable();
            $table->tinyInteger('seen')->default(0);
            $table->timestamps();

            // $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_query');
    }
}
