<?php

class read extends DB{
    public function __construct(){
        $con = DB::connect();
        $stmt = $con->prepare("SELECT * FROM clients");
        $stmt->execute();
        echo json_encode($stmt->fetchAll());
    }
}