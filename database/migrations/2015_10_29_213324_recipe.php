<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe', function(Blueprint $table) {
			
			$table->timestamps();
			$table->double('ratio');
			$table->integer('productID')->unsigned();
			$table->integer('materialID')->unsigned();
		});

		Schema::table('recipe', function(Blueprint $table) {
			$table->foreign('productID')->references('id')->on('product')
						->onDelete('restrict')
						->onUpdate('restrict');
			$table->foreign('materialID')->references('id')->on('material')
						->onDelete('cascade')
						->onUpdate('cascade');
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
        
		Schema::table('recipe', function(Blueprint $table) {
			$table->dropForeign('recipe_productID_foreign');
			$table->dropForeign('recipe_materialID_foreign');
		});		

		Schema::drop('recipe');
        //
    }
}
