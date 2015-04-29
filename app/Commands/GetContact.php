<?php namespace Topmade\Commands;

use Topmade\Contracts\Command as CommandContract;
use Topmade\Models\User;

class GetContact extends Command implements CommandContract
{
    const CLASSNAME = __CLASS__;

    /**
     * @var User
     */
    protected $user;

    /**
     * Create a new command instance.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
