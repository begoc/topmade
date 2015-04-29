<?php

class UserRegisterTest extends TestCase
{
    public function testToArray()
    {
        $userRegisterCommand = new \Topmade\Commands\UserRegister(
            'test',
            'test@test.com',
            'test'
        );

        $this->assertEquals(
            [
                'name' => 'test',
                'email' => 'test@test.com',
                'password' => 'test'
            ],
            $userRegisterCommand->toArray()
        );
    }

    public function testToArrayFails()
    {
        $userRegisterCommand = new \Topmade\Commands\UserRegister(
            'test',
            'test@test.com',
            'test'
        );

        $this->assertNotEquals(
            [
                'test',
                'test@test.com',
                'test'
            ],
            $userRegisterCommand->toArray()
        );
    }
}
