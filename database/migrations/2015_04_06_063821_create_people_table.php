<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('people', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('firstName', 20);
            $table->string('lastName', 20);
            $table->string('firstNameJP', 10);
            $table->string('lastNameJP', 10);
            $table->string('type', 10);
            $table->string('authority', 20);
            $table->string('authorityJP', 10);
            $table->string('year', 20);
            $table->integer('age');
            $table->date('birthday');
            $table->string('horoscope', 20);
            $table->string('horoscopeJP', 20);
            $table->string('bloodType', 5);
            $table->integer('height');
            $table->integer('weight');
            $table->string('threeSizes', 20);
            $table->string('favoriteSubject', 50);
            $table->string('favoriteSubjectJP', 50);
            $table->string('extracurricular', 50);
            $table->string('extracurricularJP', 50);
            $table->string('hobbies', 100);
            $table->string('hobbiesJP', 100);
            $table->string('favoriteFood', 30);
            $table->string('favoriteFoodJP', 30);
            $table->string('hatedFood', 30);
            $table->string('hatedFoodJP', 30);
            $table->string('cv', 30);
            $table->string('cvJP', 30);
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
		Schema::drop('people');
	}

}
