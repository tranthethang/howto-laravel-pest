<?php

namespace App\Services\Users;

use App\Models\User;

interface RegisterServiceInterface
{
    public function register($name, $email, $password): User;
}
