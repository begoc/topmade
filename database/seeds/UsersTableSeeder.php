<?php


use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * @var Registrar
     */
    protected $registrar;

    public function __construct(Registrar $registrar)
    {
        $this->registrar = $registrar;
    }

    public function run()
    {
        $users = [
            [
                'name' => 'Top Made',
                'email' => 'admin@topmade.net',
                'password' => 'admin'
            ]
        ];

        foreach ($users as $user) {
            $this->registrar->create($user);
        }
    }
}
