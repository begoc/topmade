<?php namespace Topmade\Http\Controllers\Admin;

use Illuminate\Contracts\Auth\Guard;
use Topmade\Contracts\Repositories\Contact;
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
     * @param Guard $auth
     * @param Contact $contact
     * @return Response
     */
    public function index(Guard $auth, Contact $contact)
    {
        $contact = $contact->contact($auth->user());

        return view('admin.home', compact('contact'));
    }
}
