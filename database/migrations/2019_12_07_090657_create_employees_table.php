<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned();
            $table->string('e_image');
            $table->string('e_name');
            $table->string('e_father_name');
            $table->date('e_dob');
            $table->string('e_local_address');
            $table->string('e_permanent_address');
            $table->integer('e_phone');
            $table->string('e_mail');
            $table->string('e_pass');
            $table->string('e_department');
            $table->string('e_designation');
            $table->date('e_join_date');
            $table->integer('e_salary');
            $table->string('e_account_number');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
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
        Schema::dropIfExists('employees');
    }
}
