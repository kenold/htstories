<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoryTagTable extends Migration {

	public function up()
	{
		Schema::create('story_tag', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('story_id');
			$table->integer('tag_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('story_tag');
	}
}