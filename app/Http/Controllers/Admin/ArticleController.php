<?php namespace Topmade\Http\Controllers\Admin;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Topmade\Contracts\Repositories\Article;
use Topmade\Http\Controllers\Controller;

use Topmade\Http\Requests\CreateContactRequest;
use Topmade\Http\Requests\ManageArticleRequest;

class ArticleController extends Controller
{
    /**
     * @var Guard
     */
    private $auth;
    /**
     * @var Article
     */
    private $article;

    /**
     * Create a new controller instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @param Article $article
     */
    public function __construct(Guard $auth, Article $article)
    {
        $this->middleware('auth');

        $this->auth = $auth;
        $this->article = $article;
    }

    /**
     * Display a listing of the resource.
     *
     * @Get("/admin/article/{id}", as="admin.article")
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request, $id)
    {
        $info = $request->session()->get('info');

        $article = $this->article->find($id);

        return view('admin.article', compact('article', 'info'));
    }

    /**
     * Store a newly created resource in storage.
     * @Post("/admin/article")
     *
     * @param ManageArticleRequest $request
     * @return Response
     */
    public function store(ManageArticleRequest $request)
    {
        $validator = $this->article->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request,
                $validator
            );
        }

        $this->article->update($request->getId(), $request->all());

        return redirect('/admin/article')->with('info', 'Articulo actualizado');
    }
}
