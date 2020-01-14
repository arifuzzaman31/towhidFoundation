<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('title_en')->unique();
            $table->mediumText('title_bn');
            $table->string('slug');
            $table->longText('description');
            $table->mediumText('type');
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('service_link',255)->nullable();
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
        Schema::dropIfExists('services');
    }
}
