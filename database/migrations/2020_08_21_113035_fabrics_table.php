<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FabricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabrics', function (Blueprint $table) {
            $table->increments("id");
            $table->integer('idFabricsType')->unsigned();
            $table->string("title");
            $table->string("articul");
            $table->string("price");
            $table->string("price_new");
            $table->string("decsription");
            $table->string("fabric_composition");
            $table->string("fabric_width");
            $table->string("fabric_density");
            $table->boolean('is_oneton');
            $table->boolean('is_new');
            $table->boolean('is_action');
            $table->boolean('is_trend');
            $table->timestamps();
            $table->foreign('idFabricsType')->references('id')->on('fabrics_types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fabrics');
    }
}
