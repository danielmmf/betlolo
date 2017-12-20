<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{

    public function up()
    {
        Schema::create('payments', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->date('deal_at');
            $table->decimal('total', 5, 2);
            $table->integer('status')->unsigned();
            $table->string('method');
            $table->integer('user_id')->unsigned();
            $table->integer('cart_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->foreign('cart_id')
                ->references('id')
                ->on('carts');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('payments');
    }
}
