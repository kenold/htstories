<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePeopleTable extends Migration {

	public function up()
	{
		Schema::create('people', function(Blueprint $table) {
			$table->increments('id');			
			$table->string('name');
			$table->string('photo_path');
			$table->string('company');
			$table->string('job_title');
			$table->string('sex', 1);
			$table->string('place_origin');
			$table->text('bio');
			$table->string('slug');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('people');
	}
}