<?php namespace Topmade\Commands;

use Topmade\Contracts\Command as CommandContract;

class StoreArticle extends Command implements CommandContract
{
    const CLASSNAME = __CLASS__;

    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $icon;
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $header;
    /**
     * @var
     */
    protected $content;
    /**
     * @var
     */
    protected $handler;

    /**
     * Create a new command instance.
     * @param $icon
     * @param $title
     * @param $header
     * @param $content
     * @param $handler
     * @param $id
     */
    public function __construct($icon, $title, $header, $content, $handler, $id = null)
    {
        $this->id = $id;
        $this->icon = $icon;
        $this->title = $title;
        $this->header = $header;
        $this->content = $content;
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
     * @return mixed
     */
    public function article()
    {
        $result = $this->toArray();

        unset($result['id']);

        return $result;
    }
}
