<?php

namespace Topmade\Commands;

use Illuminate\Contracts\Bus\Dispatcher;
use Illuminate\Contracts\Bus\SelfHandling;
use Topmade\Contracts\Command as CommandContract;
use Topmade\Exceptions\ArticleNotFoundException;
use Topmade\Handlers\Commands\GetArticleHandler;
use Topmade\Handlers\Commands\MatchArticleHandler;

class GetWelcomeSite extends Command implements CommandContract, SelfHandling
{
    protected $sections;

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        $this->sections = [
            'company',
            'activities',
            'clients',
        ];
    }


    /**
     * Handle the command.
     *
     * @param Dispatcher $dispatcher
     * @return array
     * @throws ArticleNotFoundException
     */
    public function handle(Dispatcher $dispatcher)
    {
        $articles = [];

        foreach ($this->sections as $section) {
            try {
                $dispatcher->pipeThrough([MatchArticleHandler::class, GetArticleHandler::class]);

                $articles[$section] = $dispatcher->dispatchFromArray(GetArticle::class, [
                    'handler' => $section
                ]);
            } catch (\Exception $e) {
            }
        }

        if (empty($articles)) {
            throw new ArticleNotFoundException();
        }

        return $articles;
    }
}
