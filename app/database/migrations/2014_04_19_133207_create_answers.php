<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswers extends Migration {

	public function up()
	{
		Schema::create('answers', function($table)
		{
			$table->increments('id');
			$table->integer('offer_id');
			$table->integer('status');
		});
	}

	public function down()
	{
		Schema::drop('answers');
	}

}
