<?php namespace App\Services;

use App\Models\OperationModel;

class OperationService{

    protected $operationModel;

    public function __construct(OperationModel $model){
        $this->operationModel = $model;
    }

    public function report(){
        return $this->operationModel->report();
    }

    public function add($customerId, $menuId){
        return $this->operationModel->add($customerId, $menuId);
    }

}