<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type');
class delete extends DB{
    public function __construct(){
        $data = json_decode(file_get_contents("php://input"));
        // var_dump($data);
        $con = DB::connect();
        $stmt = $con->prepare("DELETE FROM `clients` WHERE `id`=$data[0]");
        $stmt->execute();
        echo json_encode($stmt->fetchAll());
    }
}