<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_id', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');

            $table->string('type_document')->default('DNI');
            $table->string('img_front');
            $table->string('img_back');
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
        Schema::dropIfExists('documents_id');
    }
}
