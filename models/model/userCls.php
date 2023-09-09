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

class user extends Database
{

    public function user__Get_All()
    {
        $obj = $this->connect->prepare("SELECT *  FROM user");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute();
        return $obj->fetchAll();
    }

    public function user__Get_By_Id($user_id)
    {
        $obj = $this->connect->prepare("SELECT * FROM user WHERE user_id = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($user_id));
        return $obj->fetch();
    }

    public function user__Check_Login($user_name, $password)
    {
        $obj = $this->connect->prepare("SELECT * FROM user WHERE user_name=? AND password=? and ability=1");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($user_name, $password));
        if (count($obj->fetchAll()) == 1) {
            return true;
        } else {
            return false;
        }
    }
    public function user__Check_user_name($user_name)
    {
        $obj = $this->connect->prepare("select * from user where user_name = ?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($user_name));
        if (count($obj->fetchAll()) == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function user__Set_Password($user_id, $password)
    {
        $obj = $this->connect->prepare("update user set password=? where user_id=?");
        $obj->execute(array($password, $user_id));
        return $obj->rowCount();
    }

    public function user__Change_Password($user_name, $passwordold, $passwordnew)
    {
        $obj = $this->connect->prepare("UPDATE user SET password=? WHERE user_id=?");
        $obj->setFetchMode(PDO::FETCH_OBJ);
        $obj->execute(array($user_name));
        if (count($obj->fetch()) == 1) {
            $temp = $obj->fetch();
            if ($passwordold == $temp->password) {
                $update = $this->connect->prepare("update user set password=? where user_name=?");
                $update->execute(array($passwordnew, $user_name));
                return $update->rowCount();
            } else {
                return false;
            }

        } else {
            return false;
        }

    }

    public function user__Add($user_name, $email, $password, $full_name, $gender, $phone)
    {
        $obj = $this->connect->prepare("INSERT INTO user( user_name, email, password, full_name, gender, phone) VALUES (?,?,?,?,?,?)");
        $obj->execute(array($user_name, $email, $password, $full_name, $gender, $phone));
        return $obj->rowCount();
    }

    public function user__Update($user_id, $user_name, $email, $password, $full_name, $gender, $phone)
    {
        $obj = $this->connect->prepare("UPDATE user SET user_name=?, email=?, password=?, full_name=?, gender=?, phone=? WHERE user_id=?");
        $obj->execute(array($user_id, $user_name, $email, $password, $full_name, $gender, $phone));
        return $obj->rowCount();
    }

    public function user__Delete($user_id)
    {
        $obj = $this->connect->prepare("DELETE FROM user WHERE user_id = ?");
        $obj->execute(array($user_id));
        return $obj->rowCount();
    }

    public function user__Set_Ability($user_id, $ability)
    {
        $obj = $this->connect->prepare("update user set ability=? where user_id=?");
        $obj->execute(array($ability, $user_id));
        return $obj->rowCount();
    }
}
?>