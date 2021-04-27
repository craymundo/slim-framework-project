<?php namespace App\Models;

class CustomerModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getData($documentNumber){
        $query = "SELECT * FROM customer where documentNumber=:documentNumber";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':documentNumber', $documentNumber);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $result=[];
        if($data) {
            $result =$data[0];
        }
           
        return $result;
    }
}