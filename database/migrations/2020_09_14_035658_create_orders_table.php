<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("user_id")->unsigned();
            $table->integer("order_num");
            $table->date("order_date");
            $table->integer('fabrics_id')->unsigned();
            $table->integer('amount');
            $table->date('final_date');
            $table->boolean("is_active")->default('0')->nullable();
            $table->boolean("is_payed")->default('0')->nullable();
            $table->boolean("is_onway")->default('0')->nullable();
            $table->boolean("is_delivered")->default('0')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('fabrics_id')->references('id')->on('fabrics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
