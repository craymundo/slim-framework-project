<?php namespace App\Models;

class OperationModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function add($customerId, $menuId){
        $query = "INSERT INTO operation (customer_id, menu_id) values (:customer_id, :menu_id)";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':customer_id', $customerId);
        $stmt->bindParam(':menu_id', $menuId);
        $stmt->execute();
        return $this->pdo->lastInsertId() ? $menuId : 0;
    }



    public function report(){
        $sql = "SELECT count(*) as number_operations, CAST( (count(*) * 100)/ ( (select count(*) from operation)) AS SIGNED) as porcentaje , LPAD(menu_id,2,'0') menu_id, (select description from menu where id = menu_id) as description FROM `operation` group by menu_id";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }

}