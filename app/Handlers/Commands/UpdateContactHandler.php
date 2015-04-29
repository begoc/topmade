<?php namespace Topmade\Handlers\Commands;

use Topmade\Commands\UpdateContact;

use Topmade\Contracts\Repositories\Contact;
use Topmade\Exceptions\ValidatorException;
use Topmade\Validators\UpdateUserValidator;

class UpdateContactHandler
{
    /**
     * @var Contact
     */
    private $contact;
    /**
     * @var UpdateUserValidator
     */
    private $validator;

    /**
     * Create the command handler.
     *
     * @param Contact $contact
     * @param UpdateUserValidator $validator
     */
    public function __construct(Contact $contact, UpdateUserValidator $validator)
    {
        $this->contact = $contact;
        $this->validator = $validator;
    }

    /**
     * Handle the command.
     *
     * @param  UpdateContact $command
     * @param callable $next
     * @return
     * @throws ValidatorException
     */
    public function handle(UpdateContact $command, \Closure $next)
    {
        $this->validator->validate($command);

        $this->contact->update($command->getId(), $command->contact());

        return $next($command);
    }
}
