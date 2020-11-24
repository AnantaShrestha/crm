<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staffid');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->string('pp_photo')->nullable();
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('phoneno');
            $table->string('mobileno');
            $table->integer('department_id')->unsigned();
            $table->integer('title_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->string('panno');
            $table->date('join_in_date');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('ifuser');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('staff');
    }
}
