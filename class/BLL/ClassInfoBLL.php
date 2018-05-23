<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 9/3/17
 * Time: 21:48
 */

namespace BLL;


use DAL\ClassInfoDAL;
use \SessionManager;

class ClassInfoBLL extends BLLBase
{
    public function __construct(&$dbm=null)
    {
        parent::__construct($dbm);
        $this->dal=new ClassInfoDAL($this->db);
    }

    public function getClasslist($UID) {
        $bll = new UserBLL();
        if($bll->checkUserLevel($UID) == "teacher") {
            return $this->dal->getTeacherClasses($UID);
        }
        else {
            return $this->dal->getTAClasses($UID);
        }
    }

    public function setExamState($classno, $state) {
        return $this->dal->setExamState($classno, $state);
    }

    public function checkExamState($uid) {
        $bll = new UserBLL();
        $class = $bll->getClass($uid);
        return $this->dal->checkExamstate($class);
    }

    public function updateProgress($classno, $state) {
        return $this->dal->updateProgress($classno, $state);
    }

    public function checkProgress($uid) {
        $bll = new UserBLL();
        $class = $bll->getClass($uid);
        return $this->dal->checkProgress($class);
    }
}