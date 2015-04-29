<?php namespace Topmade\Http\Controllers\Admin;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Http\Request;
use Topmade\Exceptions\ValidatorException;
use Topmade\Handlers\Commands\UpdateContactHandler;
use Topmade\Handlers\Commands\UpdateUserHandler;
use Topmade\Http\Controllers\Controller;

use Topmade\Http\Requests\CreateContactRequest;
use Topmade\Http\Requests\ManageContactRequest;
use Topmade\Commands\GetContact;
use Topmade\Commands\UpdateContact;

class ContactController extends Controller
{
    /**
     * @var Guard
     */
    private $auth;

    /**
     * Create a new controller instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->middleware('auth');

        $this->auth = $auth;
    }

    /**
     * Display a listing of the resource.
     *
     * @Get("/admin/contact", as="admin.contact")
     *
     * @param Request $request
     * @param Dispatcher $dispatcher
     * @return Response
     */
    public function index(Request $request, Dispatcher $dispatcher)
    {
        $info = $request->session()->get('info');

        $contact = $dispatcher->dispatchFromArray(GetContact::class, ['user' => $this->auth->user()]);

        return view('admin.contact', compact('contact', 'info'));
    }

    /**
     * Store a newly created resource in storage.
     * @Post("/admin/contact")
     *
     * @param ManageContactRequest $request
     * @param Dispatcher $dispatcher
     * @return Response
     */
    public function store(ManageContactRequest $request, Dispatcher $dispatcher)
    {
        try {
            $dispatcher->pipeThrough([UpdateContactHandler::class, UpdateUserHandler::class]);

            $dispatcher->dispatchFrom(UpdateContact::class, $request);
        } catch (ValidatorException $e) {
            $this->throwValidationException(
                $request,
                $e->getValidator()
            );
        }

        return redirect('/admin/contact')->with('info', 'Contacto actualizado');
    }
}
