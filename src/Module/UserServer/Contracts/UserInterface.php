<?php

namespace Zhouwenming\DpxMiniProgram\Module\UserServer\Contracts;
interface UserInterface
{
    public function findUserPageByCondition($condition);
    public function findAllUserByCondition($condition);
}