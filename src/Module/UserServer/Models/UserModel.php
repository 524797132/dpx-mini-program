<?php

namespace Zhouwenming\DpxMiniProgram\Module\UserServer\Models;
use Zhouwenming\DpxMiniProgram\Module\BaseLink\BaseModel;
use Zhouwenming\DpxMiniProgram\Module\UserServer\Contracts\UserInterface;

class UserModel extends BaseModel implements UserInterface
{
    protected $table = 'user';

    public function findUserPageByCondition($condition): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->newQuery()->when($condition, function ($query) use ($condition) {
            if (isset($condition['merchant_id']) && !empty($condition['merchant_id'])) {
                $query->where('merchant_id', $condition['merchant_id']);
            }
        })->paginate($condition['limit']);
    }

    public  function findAllUserByCondition($condition): array
    {
        return $this->newQuery()->when($condition, function ($query) use ($condition) {
            if (isset($condition['merchant_id']) && !empty($condition['merchant_id'])) {
                $query->where('merchant_id', $condition['merchant_id']);
            }
        })->get()->toArray();
    }
}