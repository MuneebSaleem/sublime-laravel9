<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepositoryInterface;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserByName($user)
    {
        $user = $this->userRepository->getByUser($user);
        return response()->json($user);

    }
}
