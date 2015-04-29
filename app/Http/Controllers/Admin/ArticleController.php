<?php namespace Topmade\Http\Controllers\Admin;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Http\Request;
use Topmade\Commands\GetArticle;
use Topmade\Commands\StoreArticle;
use Topmade\Exceptions\ArticleNotFoundException;
use Topmade\Handlers\Commands\GetArticleHandler;
use Topmade\Handlers\Commands\MatchArticleHandler;
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
     * @Get("/admin/article/{handler}", as="admin.article")
     *
     * @param Request $request
     * @param Dispatcher $dispatcher
     * @param $handler
     * @return Response
     */
    public function index(Request $request, Dispatcher $dispatcher, $handler)
    {
        $info = $request->session()->get('info');

        try {
            $dispatcher->pipeThrough([MatchArticleHandler::class, GetArticleHandler::class]);

            $article = $dispatcher->dispatchFromArray(GetArticle::class, compact('handler'));
        } catch (ArticleNotFoundException $e) {
            abort('404');
        }

        return view('admin.article', compact('article', 'info'));
    }

    /**
     * Store a newly created resource in storage.
     * @Post("/admin/article", as="admin.article.save")
     *
     * @param ManageArticleRequest $request
     * @param Dispatcher $dispatcher
     * @return Response
     */
    public function store(ManageArticleRequest $request, Dispatcher $dispatcher)
    {
        try {
            $dispatcher->dispatchFrom(StoreArticle::class, $request);
        } catch (ArticleNotFoundException $e) {
            abort('404');
        } catch (ValidatorException $e) {
            $this->throwValidationException(
                $request,
                $e->getValidator()
            );
        }

        return redirect('/admin/article/' . $request->get('handler'))->with('info', 'Articulo actualizado');
    }
}
