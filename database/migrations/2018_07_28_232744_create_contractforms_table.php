<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractforms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->enum('marital_status', ['single', 'married']);
            $table->enum('gender', ['male', 'female']);
            $table->string('r_address');
            $table->date('dob');
            $table->string('firstname1');
            $table->string('lastname1');
            $table->enum('gender1', ['male', 'female']);
            $table->string('relationship');
            $table->string('r_address1');
            $table->string('phone1');
            $table->string('account_num');
            $table->string('account_name');
            $table->string('bank_name');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('contractforms');
    }
}
