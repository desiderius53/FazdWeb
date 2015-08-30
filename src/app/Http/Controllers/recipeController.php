<?php namespace App\Http\Controllers;

use App\recipe;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class recipeController extends Controller {

	/**
	 * Return a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$modelList = recipe::all();
		return response()->json($modelList);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Request::all();
		$recipe = new recipe;
		$recipe->recipeName = $input->recipeName;
		$recipe->recipeAuthor = $input->recipeAuthor;
		$recipe->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$recipe = recipe::find($id);
		return response()->json($recipe);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Request::all();
		$recipe = recipe::find($id);
		$recipe->authorName = $input->authorName;
		$recipe->recipeName = $input->recipeName;
		$recipe->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		recipe::destroy($id);
	}

}
