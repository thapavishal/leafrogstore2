<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function( $table ) {

            $table->increments('id');

            $table->integer('user_id')->index()->unsigned();
            $table->foreign('user_id')->on( 'users' )->references('id');

           $table->integer('product_id')->index()->unsigned();
            $table->foreign('product_id')->on( 'products' )->references('id');

            $table->integer('quantity');
            $table->float('price');
            $table->tinyInteger('status')
            ->comment( '1 is cart, 2 is order');

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
        Schema::drop('carts');
    }
}
