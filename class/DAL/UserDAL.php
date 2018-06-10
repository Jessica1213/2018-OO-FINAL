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

    public function getUser($uid)
    {
        $query="select ";
        $query.="* from user where uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result[0];
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

    public function getWallet($uid)
    {
        $query="select ";
        $query.="wallet from user where uid=?";
        $result=$this->exec($query, [$uid], true);
        return $result[0]["wallet"];
    }

    public function updateWallet($uid, $money)
    {
        $query="update user ";
        $query.="SET wallet=:wallet ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query, [
            ":uid"=>$uid,
            ":wallet"=>$money
        ], false, true);
    }

    public function updateInfo($uid, $newpwd, $email, $name)
    {
        $query="update user ";
        $query.="SET password=:password, email=:email, name=:name ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":password"=>$newpwd,
            ":email"=>$email,
            ":name"=>$name
        ],false,true);

    }

    public function updateImage($uid, $image)
    {
        $query="update user ";
        $query.="SET profile=:profile ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":profile"=>$image
        ],false,true);
    }

    public function setUser($acoount, $password, $username, $email) {
        $userlevel = "member";
        $profile = "none";
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
            $query.= "(account, password, email, name, profile, userlevel)";
            $query.= " VALUES ('".$acoount."','".$password."','".$email."','". $username."','".$profile."','". $userlevel."')";
            $this->exec($query, [
                "account"=>$acoount,
                "password"=>$password,
                "email"=>$email,
                "name"=>$username,
                "profile"=>$profile,
                "userlevel"=>$userlevel
                ],  false, true);
            return "true";
        }
    }

    public function getAllUsers()
    {
        $query="select ";
        $query.="UID, account, email, userlevel from user";
        $result=$this->exec($query,[],true);
        return $result;
    }

    public function removeUser($uid)
    {
        $query="delete ";
        $query.="from user ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid
        ],false,true);
    }

    public function updatePassword($uid, $pwd)
    {
        $query="update user ";
        $query.="SET password=:password ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":password"=>$pwd
        ],false,true);
    }

    public function updateUserlevel($uid, $level)
    {
        $query="update user ";
        $query.="SET userlevel=:userlevel ";
        $query.="WHERE uid=:uid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":userlevel"=>$level
        ],false,true);
    }
}
