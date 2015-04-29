<?php

namespace Topmade\Handlers\Commands;

use Topmade\Commands\UpdateContact;
use Topmade\Contracts\Repositories\User;
use Topmade\Validators\UpdateUserValidator;

class UpdateUserHandler
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var UpdateUserValidator
     */
    private $validator;

    /**
     * @param User $user
     * @param UpdateUserValidator $validator
     */
    public function __construct(User $user, UpdateUserValidator $validator)
    {
        $this->user = $user;
        $this->validator = $validator;
    }

    /**
     * Handle the command.
     *
     * @param UpdateContact $command
     * @return
     */
    public function handle(UpdateContact $command)
    {
        $this->validator->validate($command);

        return $this->user->save($command->getUserId(), $command->user());
    }
}
