<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->string('location');
            $table->integer('area');
            $table->integer('rooms');
            $table->string('floor');
            $table->integer('price');
            $table->enum('furnished', ['yes','no'])->default('yes');
            $table->integer('bathrooms');
            $table->string('communication');

            $table->bigInteger('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins');

            $table->softDeletes();
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
        Schema::dropIfExists('apartments');
    }
}
