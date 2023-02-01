<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type');
class update extends DB{
    public function __construct(){
        $data = json_decode(file_get_contents("php://input"));
        $con = DB::connect();
        $stmt = $con->prepare("UPDATE `clients` SET `nom`='$data[0]',`numéro_tel`='$data[1]',`reference`='$data[2]' WHERE `id`=$data[3]");
        $stmt->execute();
        // echo json_encode($stmt->fetchAll());
    }
}