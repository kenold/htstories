<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('stories', function(Blueprint $table) {
			$table->foreign('person_id')->references('id')->on('people')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('links', function(Blueprint $table) {
			$table->foreign('person_id')->references('id')->on('people')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('stories', function(Blueprint $table) {
			$table->dropForeign('stories_person_id_foreign');
		});
		Schema::table('links', function(Blueprint $table) {
			$table->dropForeign('links_person_id_foreign');
		});
	}
}