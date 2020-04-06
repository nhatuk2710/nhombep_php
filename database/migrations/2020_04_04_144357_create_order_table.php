<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("user_id");
            $table->string("customer_name");
            $table->string("shipping_add");
            $table->string("telephone");
            $table->decimal("grand_total",16,0);
            $table->string("payment_method");
            $table->unsignedInteger("status");
            $table->timestamps();
            $table->foreign("user_id")->references("id")->on("users");
        });
        Schema::create("order_product",function (Blueprint $table){
           $table->unsignedBigInteger("order_id");
           $table->unsignedBigInteger("product_id");
           $table->unsignedInteger("qty");
           $table->decimal("price",16,0);
           $table->foreign("order_id")->references("id")->on("order");
           $table->foreign("product_id")->references("id")->on("product");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
        Schema::dropIfExists('order_product');
    }
}
