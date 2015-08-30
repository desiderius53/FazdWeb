<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("recipes", function($table){
			$table->increments("recipeid");
			$table->string("recipeName");
			$table->integer("recipeNumber");
			$table->string("ingredients");
			$table->integer("prepTime");
			$table->integer("cookTime");
			$table->integer("bookid");
			$table->foreign("bookid")->references("bookid")->on("books");

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("recipes");
	}

}
