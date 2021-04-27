<?php namespace App\Services;

use App\Models\UserModel;

class UserService{

    protected $userModel;

    public function __construct(UserModel $model){
        $this->userModel = $model;
    }

    public function login($user, $pwd){
        return $this->userModel->login($user, $pwd);
    }

}