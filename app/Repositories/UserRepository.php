<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface 
{

    public function __construct(private User $user)
    {
        $this->user = $user;
    }

    public function getAllUsers() 
    {
        return $this->user->all();
    }

    public function getUsers(int $per_page) 
    {
        return $this->user->with(['products'])->paginate($per_page);
    }

    public function getUserById(int $id) 
    {
        return $this->user->with(['products'])->findOrFail($id);
    }
}
