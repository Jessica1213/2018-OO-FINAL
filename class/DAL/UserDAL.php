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
        return $result?$result[0]["UID"]:false;
    }

    public function getAccount($uid)
    {
        $query="select ";
        $query.="account from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["account"];
    }

    public function getUsername($uid)
    {
        $query="select ";
        $query.="name from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["name"];
    }

    public function getEmail($uid)
    {
        $query="select ";
        $query.="email from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["email"];
    }

    public function getImage($uid)
    {
        $query="select ";
        $query.="profile from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0]["profile"];
    }

    public function checkUserlevel($uid)
    {
        $query="select ";
        $query.="userlevel from user where uid=?";
        $result=$this->exec($query, [$uid], true);
        return $result[0]["userlevel"];
    }
    public function updateInfo($uid, $newpwd, $email)
    {
        $query="";
        $query.="update user ";
        $query.="SET password=:password, email=:email";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":password"=>$newpwd,
            ":email"=>$email
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

    public function setUser($acoount, $password, $username, $email) {
        $userlevel = "member";
        $userstate = "B";
        if($this->getUID($acoount,$password)){
            echo '<script language="javascript">';
            echo 'alert("這個帳號已經註冊過，請使用新的帳號")';
            echo '</script>';
            return "false";
        }
        else {
            $query = "insert ";
            $query.= "into ";
            $query.= "user ";
            $query.= "(account, password, email, name, userlevel)";
            $query.= " VALUES ('".$acoount."','".$password."','".$email."','". $username."','". $userlevel."','". $userstate."')";
            $this->exec($query, [
                "account"=>$acoount,
                "password"=>$password,
                "email"=>$email,
                "name"=>$username,
                "userlevel"=>$userlevel,
                "userstate"=>$userstate
                ],  false, true);
            return "true";
        }
    }

    public function updateState($uid, $state)
    {
        $query="";
        $query.="update user ";
        $query.="SET userstate=:userstate ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":password"=>$state
        ],false,true);
    }

    public function getState($uid)
    {
        $query = "select ";
        $query.= "userstate from user where uid=?";
        $class=$this->exec($query,[$uid],true);
        return $class[0]["userstate"];
    }
}
