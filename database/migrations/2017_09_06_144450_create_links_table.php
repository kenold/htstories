<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLinksTable extends Migration {

	public function up()
	{
		Schema::create('links', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('person_id')->unsigned();
			$table->string('label');
			$table->string('url');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('links');
	}
}