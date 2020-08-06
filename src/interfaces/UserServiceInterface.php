<?php

namespace Phprao\ComposerTest\Interfaces;


interface UserServiceInterface
{
    public function getUserInfoByUserId(int $userId): array;

    public function addUser(array $userInfo): int;
}
