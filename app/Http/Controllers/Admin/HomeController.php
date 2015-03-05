<?php namespace Topmade\Http\Controllers\Admin;

use Topmade\Http\Controllers\Controller;

class HomeController extends Controller
{

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @Get("/admin", as="dashboard")
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.home');
	}

}
