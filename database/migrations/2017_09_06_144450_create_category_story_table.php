<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryStoryTable extends Migration {

	public function up()
	{
		Schema::create('category_story', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('category_id');
			$table->integer('story_id');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('category_story');
	}
}