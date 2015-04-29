<?php namespace Topmade\Handlers\Commands;

use Topmade\Commands\UserRegister;
use Topmade\Contracts\Repositories\User;
use Topmade\Exceptions\ValidatorException;
use Topmade\Validators\UserRegisterValidator;

class UserRegisterHandler
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var UserRegisterValidator
     */
    private $validator;

    /**
     * Create the command handler.
     * @param UserRegisterValidator $validator
     * @param User $user
     */
    public function __construct(User $user, UserRegisterValidator $validator)
    {
        $this->user = $user;
        $this->validator = $validator;
    }

    /**
     * Handle the command.
     *
     * @param  UserRegister $command
     * @throws \Topmade\Validators\ValidatorException
     */
    public function handle(UserRegister $command)
    {
        $this->validator->validate($command);

        $this->user->create($command->userToRegister());
    }
}
