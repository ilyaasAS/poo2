<?php

namespace App\Interface;

use App\Entity\User;

interface EngineInterface
{
    public function start(User $a): string;
}
