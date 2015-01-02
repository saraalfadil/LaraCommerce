<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('products', function($table)
		{
		    $table->increments('id');
		    $table->string('title');
		    $table->integer('price');
		    $table->string('description');
		    $table->integer('category_id')->unsigned();
		    $table->string('photo')->nullable();
		    $table->timestamps();
		});

		Schema::table('products', function($table) {
		    $table->foreign('category_id')->references('id')->on('categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
