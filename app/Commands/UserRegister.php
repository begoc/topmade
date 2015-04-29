<?php namespace Topmade\Commands;

use Topmade\Contracts\Command as CommandContract;

class UserRegister extends Command implements CommandContract
{
    /**
     * @var
     */
    protected $name;
    /**
     * @var
     */
    protected $email;
    /**
     * @var
     */
    protected $password;
    /**
     * @var
     */
    protected $passwordConfirmation;

    /**
     * Create a new command instance.
     * @param $name
     * @param $email
     * @param $password
     * @param $passwordConfirmation
     */
    public function __construct($name, $email, $password, $passwordConfirmation)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirmation = $passwordConfirmation;
    }

    public function userToRegister()
    {
        return $this->toArray();
    }
}
