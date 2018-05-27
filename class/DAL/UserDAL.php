<?php
namespace DAL;

use DAL\DALBase;

class UserDAL extends DALBase
{
    // check the password
    public function getUID($account,$password)
    {
        $query="select ";
        $query.=" UID ";
        $query.=" from user A ";
        $query.=" where A.account=? and A.password=?";
        $result=$this->exec($query,[$account,$password],true);
        var_dump($result);
        return $result?$result[0]["UID"]:false;
    }

    public function getAccount($uid)
    {
        $query="select account from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["account"];
    }

    public function getUsername($uid)
    {
        $query="select name from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["name"];
    }

    public function getDepartment($uid)
    {
        $query="select department from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["department"];
    }

    public function getGrade($uid)
    {
        $query="select grade from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["grade"];
    }
    public function checkUserlevel($uid)
    {
        $query="select userlevel from user where uid=?";
        $result=$this->exec($query, [$uid], true);
        return $result[0]["userlevel"];
    }
    public function updatePassword($uid, $newpwd)
    {
        $query="";
        $query.="update user ";
        $query.="SET password=:password ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":password"=>$newpwd
        ],false,true);

    }
    public function timestamp($uid, $action, $time, $question)
    {
        $query="";
        $query = "insert ";
        $query.= "into ";
        $query.= "timestamp ";
        $query.= "(uid, action, question, time)";
        $query.= " VALUES ('".$uid."','".$action."','".$question."','".$time."')";
        $this->exec($query, [
            "uid"=>$uid,
            "action"=>$action,
            "question"=>$question,
            "time"=>$time
        ],  false, true);
    }
    public function getClass($uid) {
        $query = "select ";
        $query.= "class from user where uid=?";
        $class=$this->exec($query,[$uid],true);
        return $class[0]["class"];
    }


    public function getStudentlist($classno) {
        $query = "select ";
        $query.= "UID, account, name from user where class=?";
        $result=$this->exec($query, [$classno], true);
        return $result;

    }

    public function setUser($acoount, $password, $username, $department, $grade, $class) {

        if($this->getUID($acoount,$password)){
            echo '<script language="javascript">';
            echo 'alert("這個學號已經註冊過，請嘗試新的學號")';
            echo '</script>';
            return;
        }
        else {
            $query="";
            $query = "insert ";
            $query.= "into ";
            $query.= "user ";
            $query.= "(account, password, name, department, grade, class)";
            $query.= " VALUES ('".$acoount."','".$password."','".$username."','". $department."','". $grade."','". $class."')";
            $this->exec($query, [
                "account"=>$acoount,
                "password"=>$password,
                "name"=>$username,
                "department"=>$department,
                "grade"=>$grade,
                "class"=>$class
                ],  false, true);
        }
    }
}
