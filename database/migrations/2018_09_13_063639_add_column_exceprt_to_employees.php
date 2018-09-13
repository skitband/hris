<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnExceprtToEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {

            $table->string('school')->nullable();
            $table->string('course')->nullable();
            $table->string('year_graduated',4)->nullable();
            $table->string('tin',25)->nullable();
            $table->string('sss',25)->nullable();
            $table->string('pagibig',25)->nullable();
            $table->string('philhealth',25)->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
}
