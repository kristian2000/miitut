<?php

use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('phone')->nullable();
            $table->string('dni')->nullable();
            $table->string('description')->nullable();

            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->float('lat')->nullable();
            $table->float('lng')->nullable();

            $table->string('userType')->default('user');
            $table->string('fase_registry')->nullable();
            $table->string('verification_code')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('phone_visible_public')->default(false);

            $table->boolean('driving_license')->default(false); // carnet de conducir
            $table->boolean('own_vehicle')->default(false); // vehiculo propio
            $table->boolean('first_aid')->default(false); // primeros auxilios
            $table->boolean('has_children')->default(false); // tiene niños
            $table->string('nationality')->nullable(); // nacionalidad

            $table->json('spoken_language')->nullable();

            $table->boolean('email_check')->default(false);
            $table->boolean('profile_check')->default(false);

            $table->integer('score')->default(0);
            $table->integer('ratings')->default(0);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
