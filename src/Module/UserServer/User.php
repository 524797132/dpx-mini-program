<?php

namespace Zhouwenming\DpxMiniProgram\Module\UserServer;
use Zhouwenming\DpxMiniProgram\Module\UserServer\Models\UserModel;

class User
{

    public function findUserPageByCondition(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        $userModel  = new UserModel();
        return $userModel->findUserPageByCondition(["merchant_id"=>1,"limit"=>10]);
    }
    public function findUserByCondition(): array
    {
        $userModel  = new UserModel();
        return $userModel->findAllUserByCondition(["merchant_id"=>1]);
    }


}