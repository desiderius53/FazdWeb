<?php namespace App\Http\Controllers;

use App\book;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class bookController extends Controller {

	/**
	 * Return a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$modelList = book::all();
		return response()->json($modelList);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();
		$book = new book;
		$book->bookName = $input["bookName"];
		$book->bookAuthor = $input["bookAuthor"];
		$book->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 * @param App\Http\book $book
	 * @return Response
	 */
	public function show($id)
	{
		$book = book::find($id);
		return response()->json($book);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$input = $request->all();
		$book = book::find($id);
		$book->bookName = $input["bookName"];
		$book->bookAuthor = $input["bookAuthor"];
		$book->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		book::destroy($id);
	}

}
