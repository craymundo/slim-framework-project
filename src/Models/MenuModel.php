<?php namespace App\Models;

class MenuModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function getAll(){
        $sql = "SELECT * FROM menu where status=1";
        $query = $this->pdo->query($sql);
        return $query->fetchAll();
    }


}