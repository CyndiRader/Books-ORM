<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBooksAndTypesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ('books', function($table) {
			$table->increments('id');
			$table->string('title');
			$table->string('author');
			$table->integer('booktype_id')->nullable();
		});	
		Schema::create('booktypes', function($table){
            $table->increments('id');
            $table->string('name');
        });	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
		Schema::drop('booktypes');
	}

}
