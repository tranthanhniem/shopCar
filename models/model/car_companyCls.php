<?php

$a = "./models/configs/config.php";
$b = "../models/configs/config.php";
$c = "../../models/configs/config.php";
$d = "../../../models/configs/config.php";
$e = "../../../../models/configs/config.php";
$e = "../../../../models/configs/config.php";

if (file_exists($a)) {
    $des = $a;
}
if (file_exists($b)) {
    $des = $b;
}
if (file_exists($c)) {
    $des = $c;
}
if (file_exists($d)) {
    $des = $d;
}

if (file_exists($e)) {
    $des = $e;
}

include_once($des);

class car_company extends Database
{

    public function car_company__Get_All()
    {
        $obj = $this->connect->prepare("SELECT *  FROM car_company");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function car_company__Get_By_Id($car_company_id)
    {
        $obj = $this->connect->prepare("SELECT * FROM car_company WHERE car_company_id = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($car_company_id));
        return $obj->fetch();
    }


    public function car_company__Add($car_company_code, $car_company_name, $photo)
    {
        $obj = $this->connect->prepare("INSERT INTO car_company( car_company_code, car_company_name, photo) VALUES (?,?,?)");
        $obj->execute(array($car_company_code, $car_company_name, $photo));
        return $obj->rowCount();
    }

    public function car_company__Update($car_company_id, $car_company_code, $car_company_name, $photo)
    {
        $obj = $this->connect->prepare("UPDATE car_company SET car_company_code=?, car_company_name=?, photo=? WHERE car_company_id=?");
        $obj->execute(array($car_company_id, $car_company_code, $car_company_name, $photo));
        return $obj->rowCount();
    }

    public function car_company__Delete($car_company_id)
    {
        $obj = $this->connect->prepare("DELETE FROM car_company WHERE car_company_id = ?");
        $obj->execute(array($car_company_id));
        return $obj->rowCount();
    }
    public function car_company__Set_Ability($car_company_id, $ability)
    {
        $obj = $this->connect->prepare("update car_company set ability=? where car_company_id=?");
        $obj->execute(array($ability, $car_company_id));
        return $obj->rowCount();
    }
}
?>