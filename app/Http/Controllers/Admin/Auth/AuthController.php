<?php namespace Topmade\Http\Controllers\Admin\Auth;

use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Http\Request;
use Topmade\Exceptions\ValidatorException;
use Topmade\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers;

    protected $redirectTo = '/admin';

    protected $loginPath = '/admin';

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

        $this->middleware('guest', ['except' => ['getLogout', 'getRegister', 'postRegister']]);
        $this->middleware('auth', ['only' => ['getLogout', 'getRegister', 'postRegister']]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('admin.auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     * @param Dispatcher $dispatcher
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request, Dispatcher $dispatcher)
    {
        try {
            $dispatcher->dispatchFrom(UserRegister::class, $request);
        } catch (ValidatorException $e) {
            $this->throwValidationException(
                $request,
                $e->getValidator()
            );
        }

        return redirect($this->redirectPath());
    }

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('admin.auth.login');
    }
}
