<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->boolean('ad')->default(false); // si es un anuncio de un empleador
            
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->unsignedBigInteger('category_user_id')->nullable();
            $table->foreign('category_user_id')->references('id')->on('categories_user');

            $table->unsignedBigInteger('status_id');

            $table->foreign('status_id')->references('id')->on('status');
            $table->foreignId('user_id')->constrained();

            $table->date('date_start');
            $table->date('date_end')->nullable();
            $table->time('start_time');

            $table->string('type_contract'); // ocasional | habitual
            $table->integer('hours');
            $table->string('address');
            $table->string('message');

            $table->float('price');

            $table->json('daysSelected')->nullable();

            $table->unsignedBigInteger('qualification_hired_id')->nullable();
            $table->unsignedBigInteger('qualification_employer_id')->nullable();

            $table->date('renovation')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
