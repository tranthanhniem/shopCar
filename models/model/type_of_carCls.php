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

class type_of_car extends Database
{

    public function type_of_car__Get_All()
    {
        $obj = $this->connect->prepare("SELECT *  FROM type_of_car");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function type_of_car__Get_By_Id($type_of_car_id)
    {
        $obj = $this->connect->prepare("SELECT * FROM type_of_car WHERE type_of_car_id = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($type_of_car_id));
        return $obj->fetch();
    }


    public function type_of_car__Add($type_of_car_code, $type_of_car_name, $photo)
    {
        $obj = $this->connect->prepare("INSERT INTO type_of_car( type_of_car_code, type_of_car_name, photo) VALUES (?,?,?)");
        $obj->execute(array($type_of_car_code, $type_of_car_name, $photo));
        return $obj->rowCount();
    }

    public function type_of_car__Update($type_of_car_id, $type_of_car_code, $type_of_car_name, $photo)
    {
        $obj = $this->connect->prepare("UPDATE type_of_car SET type_of_car_code=?, type_of_car_name=?, photo=? WHERE type_of_car_id=?");
        $obj->execute(array($type_of_car_id, $type_of_car_code, $type_of_car_name, $photo));
        return $obj->rowCount();
    }

    public function type_of_car__Delete($type_of_car_id)
    {
        $obj = $this->connect->prepare("DELETE FROM type_of_car WHERE type_of_car_id = ?");
        $obj->execute(array($type_of_car_id));
        return $obj->rowCount();
    }
    public function type_of_car__Set_Ability($type_of_car_id, $ability)
    {
        $obj = $this->connect->prepare("update type_of_car set ability=? where type_of_car_id=?");
        $obj->execute(array($ability, $type_of_car_id));
        return $obj->rowCount();
    }
}
?>