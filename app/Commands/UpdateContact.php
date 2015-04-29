<?php namespace Topmade\Commands;

use Topmade\Contracts\Command as CommandContract;

class UpdateContact extends Command implements CommandContract
{
    /**
     * @var
     */
    protected $user;
    /**
     * @var
     */
    protected $id;
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
    protected $address;
    /**
     * @var
     */
    protected $zip_code;
    /**
     * @var
     */
    protected $city;
    /**
     * @var
     */
    protected $country;
    /**
     * @var
     */
    protected $phone;
    /**
     * @var
     */
    protected $fax;

    /**
     * Create a new command instance.
     * @param $id
     * @param $user
     * @param $name
     * @param $email
     * @param $address
     * @param $zip_code
     * @param $city
     * @param $country
     * @param $phone
     * @param $fax
     */
    public function __construct($id, $user, $name, $email, $address, $zip_code, $city, $country, $phone, $fax)
    {
        $this->user = $user;
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->zip_code = $zip_code;
        $this->city = $city;
        $this->country = $country;
        $this->phone = $phone;
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function contact()
    {
        $result = $this->toArray();

        unset($result['id'], $result['name']);

        return $result;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user;
    }

    public function user()
    {
        return array(
            'email' => $this->email,
            'name' => $this->name,
        );
    }
}
