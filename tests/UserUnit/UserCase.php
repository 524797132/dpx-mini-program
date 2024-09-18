<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Zhouwenming\DpxMiniProgram\Module\UserServer\User;

$user = new User();
$user->findUserByCondition();
