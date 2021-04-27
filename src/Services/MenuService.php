<?php namespace App\Services;

use App\Models\MenuModel;

class MenuService{

    protected $menuModel;

    public function __construct(MenuModel $model){
        $this->menuModel = $model;
    }

    public function getAll(){
        return $this->menuModel->getAll();
    }

}