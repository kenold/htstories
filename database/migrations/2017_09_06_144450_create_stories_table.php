<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStoriesTable extends Migration {

	public function up()
	{
		Schema::create('stories', function(Blueprint $table) {
			$table->increments('id');
			$table->date('date');
			$table->string('cover_path');
			$table->integer('person_id')->unsigned();
			$table->string('summary');
			$table->text('content');
			$table->string('video_url');
			$table->text('video_embed')->nullable();
			$table->string('audio_url')->nullable();
			$table->text('audio_embed')->nullable();
			$table->string('language');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('stories');
	}
}