<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class recipe extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'recipes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['recipeName', 'recipeNumber', 'ingredients', 'preTime', 'cookTime'];

}
