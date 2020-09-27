<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNumberAndGenderToNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('numbers', function (Blueprint $table) {
            $table->integer('number')->unsigned()->nullable()->default(12);
            $table->boolean('gender')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('numbers', function (Blueprint $table) {
            $table->dropColumn('number');
            $table->dropColumn('gender');
        });
    }
}
