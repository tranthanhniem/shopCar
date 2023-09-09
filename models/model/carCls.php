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

class car extends Database
{

    public function car__Get_All()
    {
        $obj = $this->connect->prepare("SELECT *  FROM car");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function car__Get_By_Id($car_id)
    {
        $obj = $this->connect->prepare("SELECT * FROM car WHERE car_id = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($car_id));
        return $obj->fetch();
    }


    public function car__Add($car_code, $car_name, $price, $type_of_car_name, $car_company_name, $car_specitications, $photo1, $photo2, $photo3)
    {
        $obj = $this->connect->prepare("INSERT INTO car( car_code, car_name, price, type_of_car_name, car_company_name, car_specitications, photo1, photo2, photo3) VALUES (?,?,?,?,?,?,?,?,?)");
        $obj->execute(array($car_code, $car_name, $price, $type_of_car_name, $car_company_name, $car_specitications, $photo1, $photo2, $photo3));
        return $obj->rowCount();
    }

    public function car__Update($car_id, $car_code, $car_name, $price, $type_of_car_name, $car_company_name, $car_specitications, $photo1, $photo2, $photo3)
    {
        $obj = $this->connect->prepare("UPDATE car SET car_code=?, car_name=?, price=?, type_of_car_name=?, car_company_name=?, car_specitications=?, photo1=?, photo2=?, photo3=? WHERE car_id=?");
        $obj->execute(array($car_id, $car_code, $car_name, $price, $type_of_car_name, $car_company_name, $car_specitications, $photo1, $photo2, $photo3));
        return $obj->rowCount();
    }

    public function car__Delete($car_id)
    {
        $obj = $this->connect->prepare("DELETE FROM car WHERE car_id = ?");
        $obj->execute(array($car_id));
        return $obj->rowCount();
    }

    public function car__Set_Ability($car_id, $ability)
    {
        $obj = $this->connect->prepare("update car set ability=? where car_id=?");
        $obj->execute(array($ability, $car_id));
        return $obj->rowCount();
    }

    public function getCarByCompanyId($id_company)
    {
        $obj = $this->connect->prepare("SELECT * FROM car WHERE car_company_name = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($id_company));
        return $obj->fetchAll();
    }

    public function getCarByTypeOfCar($type_of_car_id)
    {
        $obj = $this->connect->prepare("SELECT * FROM car WHERE type_of_car_name = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($type_of_car_id));
        return $obj->fetchAll();
    }
    // public static function getCarByTypeOfCar($type_of_car_id)
    // {
    //     $opt = [
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    //     ];
    //     $connect = new PDO("mysql:host=localhost;dbname=doan;charset=utf8", "root", "", $opt);
    //     $obj = $connect->prepare("SELECT * FROM car WHERE type_of_car_name = ?");
    //     $obj->setFetchMode(PDO::FETCH_OBJ);
    //     $obj->execute(array($type_of_car_id));
    //     return $obj->fetchAll();
    // }
}
?>