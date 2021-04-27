<?php namespace App\Models;

class UserModel{

    protected $pdo;

    public function __construct($db){
        $this->pdo = $db;
    }

    public function login($user, $pwd){
        $query = "SELECT id, user,name,last_name FROM user where user=:user and password=:pwd";

        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':pwd', $pwd);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $result=[];
        if($data) {
            $result =$data[0];
        }
           
        return $result;
    }


}