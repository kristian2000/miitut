<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('method_payment');
            $table->string('type_payment');
            $table->float('amount');
            $table->boolean('subscription')->default(0);
            $table->foreignId('user_id')->constrained()->nullable();
            $table->foreignId('contract_id')->constrained()->nullable();

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            
            $table->string('type')->default(0);
            $table->string('charge')->nullable();
            $table->json('data')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
