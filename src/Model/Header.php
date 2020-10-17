<?php
declare(strict_types = 1);

namespace App\Model;

class Header
{
    public int $error = 0;
    public string $message = '';
    public int $next;
}
