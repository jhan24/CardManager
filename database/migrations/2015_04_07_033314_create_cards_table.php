<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
            $table->integer('cardNumber');
            $table->integer('person_id')->unsigned();
            $table->primary('cardNumber');
            $table->foreign('person_id')->references('id')->on('People');
            $table->string('firstName', 20);
            $table->string('lastName', 20);
            $table->string('firstNameJP', 10);
            $table->string('lastNameJP', 10);
            $table->string('type', 10);
            $table->string('cardName', 40);
            $table->string('cardNameKanji', 20);
            $table->string('rarity', 10);
            $table->string('setName', 30);
            $table->string('eventName', 30);
            $table->string('fileName', 20);
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cards');
	}

}
