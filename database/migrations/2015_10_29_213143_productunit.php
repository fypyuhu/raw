<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Productunit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        	Schema::create('productunit', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->double('pcost');
			$table->double('acost');
                        $table->timestamp('soldDate');
			$table->boolean('isSold')->default(false);
			
			$table->integer('productID')->unsigned();
		});

		Schema::table('productunit', function(Blueprint $table) {
			$table->foreign('productID')->references('id')->on('product')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('productunit', function(Blueprint $table) {
			$table->dropForeign('productunit_productID_foreign');
			
		});		

		Schema::drop('productunit');
        //
    }
}
