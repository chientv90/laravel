<?php

namespace App\Services;

use App\Models\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserService extends BaseService
{
    /**
     * @var User
     */
    private $model;

    /**
     * UserService constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getActivedUsers()
    {
        return $this->model->getActivedUsers();
    }
}
