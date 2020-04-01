<?php

declare(strict_types=1);

namespace App\ReadModel\User;

class AuthView
{
    public string $id;
    public string $email;
    public string $password_hash;
    public string $role;
    public string $status;
}
