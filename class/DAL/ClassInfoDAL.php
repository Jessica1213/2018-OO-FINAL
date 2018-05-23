<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 9/3/17
 * Time: 21:48
 */

namespace DAL;


class ClassInfoDAL extends DALBase
{
    public function getTeacherClasses($TID)
    {
        $query="select distinct";
        $query.=" classname ";
        $query.=" from classinfo A ";
        $query.=" where A.teacherID=?";
        $result=$this->exec($query,[$TID],true);
        return $result;
    }

    public function getTAClasses($TAID)
    {
        $query="select distinct";
        $query.=" classname ";
        $query.=" from classinfo A ";
        $query.=" where A.TA=?";
        $result=$this->exec($query,[$TAID],true);
        return $result;
    }

    public function setExamState($classno, $state) {
        $query="update classinfo ";
        $query.="SET examstate=:examstate ";
        $query.="WHERE classname=:classname";
        $result=$this->exec($query,[
            ":examstate"=>$state,
            ":classname"=>$classno
        ],false,true);

    }

    public function checkExamstate($classno) {
        $query="select distinct";
        $query.=" examstate ";
        $query.=" from classinfo A ";
        $query.=" where A.classname=?";
        $result=$this->exec($query,[$classno],true);
        return $result[0]['examstate'];
    }

    public function updateProgress($classno, $state) {
        $query="update classinfo ";
        $query.="SET progress=:progress ";
        $query.="WHERE classname=:classname";
        $result=$this->exec($query,[
            ":progress"=>$state,
            ":classname"=>$classno
        ],false,true);
    }

    public function checkProgress($classno) {
        $query="select distinct";
        $query.=" progress ";
        $query.=" from classinfo A ";
        $query.=" where A.classname=?";
        $result=$this->exec($query,[$classno],true);
        return $result[0]['progress'];
    }
}