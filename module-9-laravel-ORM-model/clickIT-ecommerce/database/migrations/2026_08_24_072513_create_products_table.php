<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments("id");
            $table->unsignedBigInteger('catid');
            $table->foreign('catid')->references('id')->on('addcategories');
            $table->string("photo");
            $table->string("pname");
            $table->integer("oldprice");
            $table->integer("newprice");
            $table->integer("qty");
            $table->text("descriptions");
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
        Schema::dropIfExists('products');
    }
};
