<?php

namespace app\database_services;


use app\helpers\Uuid;
use app\models\database\User;

class UsersDatabaseService
{
    /**
     * @var User
     */
    private $users;

    public function __construct(
        User $users
    )
    {
        $this->users = $users;
    }

    public function create(string $username, string $login, string $password, string $privateToken, string $publicToken): User
    {
        return new User([
            'id' => Uuid::generate(),
            'name' => $username,
            'login' => $login,
            'password' => $password,
            'private_shiptor_token' => $privateToken,
            'public_shiptor_token' => $publicToken
        ]);
    }

    public function getByName(string $name)
    {
        return User::findOne([
            'login' => $name,
        ]);
    }


}