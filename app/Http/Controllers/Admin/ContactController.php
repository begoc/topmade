<?php namespace Topmade\Http\Controllers\Admin;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Topmade\Contracts\Repositories\Contact;
use Topmade\Http\Controllers\Controller;

use Topmade\Http\Requests\CreateContactRequest;
use Topmade\Http\Requests\ManageContactRequest;

class ContactController extends Controller
{
    /**
     * @var Contact
     */
    private $contact;
    /**
     * @var Guard
     */
    private $auth;

    /**
     * Create a new controller instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @param Contact $contact
     */
    public function __construct(Guard $auth, Contact $contact)
    {
        $this->middleware('auth');

        $this->contact = $contact;
        $this->auth = $auth;
    }

    /**
     * Display a listing of the resource.
     *
     * @Get("/admin/contact", as="admin.contact")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $info = $request->session()->get('info');

        $contact = $this->contact->contact($this->auth->user());

        return view('admin.contact', compact('contact', 'info'));
    }

    /**
     * Store a newly created resource in storage.
     * @Post("/admin/contact")
     *
     * @param ManageContactRequest $request
     * @return Response
     */
    public function store(ManageContactRequest $request)
    {
        $validator = $this->contact->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request,
                $validator
            );
        }

        $this->contact->update($request->getId(), $request->all());

        return redirect('/admin/contact')->with('info', 'Contacto actualizado');
    }
}
