<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getByUser($user)
    {
        return User::where('name', $user)->get();
    }
}