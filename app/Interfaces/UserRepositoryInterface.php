<?php

namespace App\Interfaces;

interface UserRepositoryInterface 
{
    public function getAllUsers();
    public function getUsers(int $perPage);
    public function getUserById(int $id);
}