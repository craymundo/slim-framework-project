<?php namespace App\Services;

use App\Models\CustomerModel;

class CustomerService{

    protected $customerModel;

    public function __construct(CustomerModel $model){
        $this->customerModel = $model;
    }

    public function getData($documentNumber){
        return $this->customerModel->getData($documentNumber);
    }

    public function getAll(){
        return $this->customerModel->getAll();
    }

}