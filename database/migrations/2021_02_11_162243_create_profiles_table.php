<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('craftsman_id')->nullable();
            $table->foreign('craftsman_id')->references('id')->on('craftsmen');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('martial_status')->nullable();
            $table->string('image path')->nullable();
            $table->string('description')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
