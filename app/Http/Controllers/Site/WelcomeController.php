<?php namespace Topmade\Http\Controllers\Site;

use Topmade\Http\Controllers\Controller;

class WelcomeController extends Controller {

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
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @Get("/", as="home")
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('site.welcome');
	}

}
