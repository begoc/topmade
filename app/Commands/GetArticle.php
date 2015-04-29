<?php namespace Topmade\Commands;

use Topmade\Contracts\Command as CommandContract;

class GetArticle extends Command implements CommandContract
{
    const CLASSNAME = __CLASS__;

    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $handler;

    /**
     * Create a new command instance.
     *
     * @param $handler
     */
    public function __construct($handler)
    {
        $this->handler = $handler;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getHandler()
    {
        return $this->handler;
    }
}
