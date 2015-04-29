<?php namespace Topmade\Handlers\Commands;

use Topmade\Commands\GetContact;

use Topmade\Contracts\Repositories\Contact;

class GetContactHandler extends CommandHandler
{
    const CLASSNAME = __CLASS__;

    /**
     * @var Contact
     */
    private $contact;

    /**
     * Create the command handler.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Handle the command.
     *
     * @param  GetContact $command
     * @return void
     */
    public function handle(GetContact $command)
    {
        return $this->contact->contact($command->getUser());
    }
}
