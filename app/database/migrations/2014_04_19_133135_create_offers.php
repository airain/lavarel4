<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffers extends Migration {

	public function up()
	{
		Schema::create('offers', function($table)
		{
			$table->increments('id');
			$table->text('sender_games');
			$table->text('recipient_games');
		});
	}

	public function down()
	{
		Schema::drop('offers');
	}

}
