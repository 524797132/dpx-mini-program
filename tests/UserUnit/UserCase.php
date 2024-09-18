<?php
namespace Zhouwenming\DpxMiniProgram\Tests\UserUnit;
require_once __DIR__ . '/../../vendor/autoload.php';
use Zhouwenming\DpxMiniProgram\Module\UserServer\User;

class UserCase {
    public static function testFindUserByCondition()
    {
        $user = new User();
        $user->findUserByCondition();
    }
}


