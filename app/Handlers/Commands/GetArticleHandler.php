<?php namespace Topmade\Handlers\Commands;


use Topmade\Commands\GetArticle;
use Topmade\Contracts\Repositories\Article;
use Topmade\Exceptions\ArticleNotFoundException;

class GetArticleHandler
{
    /**
     * @var Article
     */
    private $article;

    /**
     * Create the command handler.
     * 
     * @param Article $article
     */
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Handle the command.
     *
     * @param GetArticle $command
     * @return
     * @throws ArticleNotFoundException
     */
    public function handle(GetArticle $command)
    {
        $result = $this->article->find($command->getId());

        if (!$result) {
            throw new ArticleNotFoundException();
        }
        
        return $result;
    }
}
