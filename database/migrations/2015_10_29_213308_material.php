<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Material extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        	Schema::create('material', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name',100);
			$table->string('type',100);
                        $table->double('unitPrice');
                        $table->integer('quantity');
		});

	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
		Schema::drop('material');
        //
    }
}
