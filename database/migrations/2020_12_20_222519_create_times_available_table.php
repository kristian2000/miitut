<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesAvailableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('times_available', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_user_id');
            $table->string('day');
            $table->string('hours');

            $table->foreign('category_user_id')->references('id')->on('categories_user')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('times_available');
    }
}
