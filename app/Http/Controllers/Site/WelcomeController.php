<?php namespace Topmade\Http\Controllers\Site;

use Illuminate\Contracts\Bus\Dispatcher;
use Topmade\Commands\GetWelcomeSite;
use Topmade\Http\Controllers\Controller;

class WelcomeController extends Controller
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
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @Get("/")
     *
     * @param Dispatcher $dispatcher
     * @return Response
     */
    public function index(Dispatcher $dispatcher)
    {
        try {
            $welcome = $dispatcher->dispatch(new GetWelcomeSite());
        } catch (ArticleNotFoundException $e) {
            abort('404');
        }

        return view('site.welcome', $welcome);
    }

}
