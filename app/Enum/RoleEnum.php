<?php

namespace App\Enum;

enum RoleEnum: string
{
    case Admin = 'admin';
    case User = 'user';
    case Supplier = 'supplier';
}
