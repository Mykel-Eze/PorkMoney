<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('units');
            $table->unsignedInteger('plan_id');
            $table->unsignedInteger('user_id');
            $table->boolean('paid_out')->default(false);
            $table->boolean('requested_pay_out')->default(false);
            $table->string('reference')->default(false);
            $table->boolean('is_card')->default(false);
            $table->string('email')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
