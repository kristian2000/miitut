<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsInUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'town')) {
                $table->string('town')->nullable();
            }
            if (!Schema::hasColumn('users', 'amenity')) {
                $table->string('amenity')->nullable();
            }
            if (!Schema::hasColumn('users', 'postal_code')) {
                $table->string('postal_code')->nullable();
            }
            if (!Schema::hasColumn('users', 'county')) {
                $table->string('county')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'town')) {
                $table->dropColumn('town');
            }
            if (Schema::hasColumn('users', 'amenity')) {
                $table->dropColumn('amenity');
            }
            if (Schema::hasColumn('users', 'postal_code')) {
                $table->dropColumn('postal_code');
            }
            if (Schema::hasColumn('users', 'county')) {
                $table->dropColumn('county');
            }
        });
    }
}
