<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: Content-Type');
class insert extends DB{
    public function __construct(){
        $data = json_decode(file_get_contents("php://input"));
        $con = DB::connect();
        $stmt = $con->prepare("INSERT INTO `clients`(`nom`, `numéro_tel`, `reference`) VALUES ('$data[0]','$data[1]','$data[2]')");
        $stmt->execute();
    }
}

    

    
