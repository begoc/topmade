<?php namespace Topmade\Handlers\Commands;

use Topmade\Commands\GetArticle;
use Topmade\Exceptions\ArticleNotFoundException;

class MatchArticleHandler extends CommandHandler
{
    const CLASSNAME = __CLASS__;

    /**
     * Create the command handler.
     *
     */
    public function __construct()
    {
        $this->artilcesHandlerId = [
            'company' => 1,
            'activities' => 2,
            'clients' => 3
        ];
    }

    /**
     * Handle the command.
     *
     * @param GetArticle $command
     * @param callable $next
     * @return
     * @throws ArticleNotFoundException
     */
    public function handle(GetArticle $command, \Closure $next)
    {
        if (!array_key_exists($command->getHandler(), $this->artilcesHandlerId)) {
            throw new ArticleNotFoundException();
        }

        $command->setId($this->artilcesHandlerId[$command->getHandler()]);

        return $next($command);
    }
}
