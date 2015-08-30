<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'books';

	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['bookName', 'bookAuthor'];
}
