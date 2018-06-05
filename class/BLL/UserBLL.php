<?php
namespace BLL;

use BLL\BLLBase;
use DAL\UserDAL;
use \SessionManager;

class UserBLL extends BLLBase
{
    public function __construct(&$dbm=null)
    {
        parent::__construct($dbm);
        $this->dal=new UserDAL($this->db);
    }

    // user login
    public function logIn($account,$password)
    {
        $password=\StringFilter::hash($password);
        $uid = $this->dal->getUID($account,$password);
        if(!$uid) {
            return "false";
        } else {
            SessionManager::set("UID",$uid);
            return "true";
        }
    }

    // check if is logged in
    public static function isLogIn()
    {
        return SessionManager::has("UID");
    }

    // logout
    public static function logOut()
    {
        SessionManager::clear();
    }

//    public static function getAccountByUID($uid=1)
//    {
//        return $this->dal->getAccount($uid);
//    }
    public function updateInfo($id, $newpwd, $email)
    {
        return $this->isLogIn()?$this->dal->updateInfo($id, $newpwd, $email):false;
    }


    public function getAccount($uid)
    {
        return $this->isLogIn()?$this->dal->getAccount($uid):false;
    }

    public function getUsername($uid)
    {
        return $this->isLogIn()?$this->dal->getUsername($uid):false;
    }

    public function getEmail($uid)
    {
        return $this->isLogIn()?$this->dal->getEmail($uid):false;
    }

    public function getImage($uid)
    {
        return $this->isLogIn()?$this->dal->getImage($uid):false;
    }

    public function getClass($uid)
    {
        return $this->isLogIn()?$this->dal->getClass($uid):false;
    }

    public function getStudentList($classno)
    {
        return $this->isLogIn()?$this->dal->getStudentlist($classno):false;
    }

    public function checkUserLevel($uid) {
        return $this->islogIn()?$this->dal->checkUserlevel($uid):false;
    }

    public function addAccount($account, $password, $username, $email)
    {
        return $this->dal->setUser($account, $password, $username, $email);
    }

    public function getState() {
        return $this->islogIn()?$this->dal->getState(SessionManager::get("UID")):false;
    }
    public function updateState($uid,$state)
    {
        return $this->dal->updateState($uid,$state);
    }

}
