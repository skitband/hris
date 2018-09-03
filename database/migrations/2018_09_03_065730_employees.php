<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('emp_id',12)->unique();;
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->date('birthdate');
            $table->string('address');
            $table->string('job');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('emp_id')->references('emp_id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
