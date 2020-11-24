<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->date('dob');
            $table->string('registrationnumber')->nullable();
            $table->string('panvatnumber')->nullable();
            $table->string('password');
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('city');
            $table->string('address');
            $table->string('address2')->nullable();
            $table->enum('vendor_type',['Organization','Individual']);
            $table->string('firstcontactperson')->nullable();
            $table->string('firstemail')->nullable();
            $table->string('firstphone')->nullable();
            $table->string('secondcontactperson')->nullable();
            $table->string('secondemail')->nullable();
            $table->string('secondphone')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
