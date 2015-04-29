<?php namespace Topmade\Handlers\Commands;

use Topmade\Commands\StoreArticle;
use Topmade\Contracts\Repositories\Article;
use Topmade\Exceptions\ValidatorException;
use Topmade\Validators\StoreArticleValidator;

class StoreArticleHandler
{
    /**
     * @var Article
     */
    private $article;
    /**
     * @var StoreArticleValidator
     */
    private $validator;

    /**
     * Create the command handler.
     * @param Article $article
     * @param StoreArticleValidator $validator
     */
    public function __construct(Article $article, StoreArticleValidator $validator)
    {
        $this->article = $article;
        $this->validator = $validator;
    }

    /**
     * Handle the command.
     *
     * @param StoreArticle $command
     * @throws ValidatorException
     */
    public function handle(StoreArticle $command)
    {
        $this->validator->validate($command);

        if (!$command->getId()) {
            $this->article->create($command->article());
        } else {
            $this->article->update($command->getId(), $command->article());
        }
    }
}
