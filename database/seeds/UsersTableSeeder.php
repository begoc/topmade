<?php


use Illuminate\Database\Seeder;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Topmade\Commands\UserRegister;

class UsersTableSeeder extends Seeder
{
    use DispatchesCommands;

    public function run()
    {
        $users = [
            [
                'name' => 'Top Made',
                'email' => 'admin@topmade.net',
                'password' => 'topmade',
                'passwordConfirmation' => 'topmade'
            ]
        ];

        foreach ($users as $user) {
            $this->dispatchFromArray(UserRegister::class, $user);
        }
    }
}
