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
            $table->string('ref')->nullable();
            $table->string('type')->nullable();
            $table->string('type_payment');
            $table->float('amount');

            $table->foreignId('user_id')->constrained()->nullable();
            $table->foreignId('contract_id')->nullable()->constrained();

            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('payments');

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('status');
            
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
