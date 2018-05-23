<?php
namespace DAL;

use DAL\DALBase;

class GameDAL extends DALBase
{
    public function isUpdate($uid,$question)
    {
        $query = "select count(1) AC from game A where A.uid=? and A.question=?";
        $result=$this->exec($query,[$uid,$question],true);
        return $result[0]["AC"]>0;
    }

    public function storeXml($uid,$question,$xml)
    {
        $query="";
        if ($this->isUpdate($uid,$question)) {
            $query.="update game ";
            $query.="SET xml=:xml ";
            $query.="WHERE uid=:uid and question=:question";
        } else {
            $query.="insert into game(uid, question, xml)";
            $query.=" VALUES (:uid,:question,:xml)";
        }
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":question"=>$question,
            ":xml"=>$xml
        ],false,true);
    }

    public function getCompletedQuest($uid)
    {
        $query="select question from game A where A.uid=?";
        $result=$this->exec($query,[$uid],true);
        return $result;
    }

    public function getCode($uid,$question)
    {
        $query="select xml from game A where A.uid=? and A.question=?";
        $result=$this->exec($query,[$uid,$question],true);
        return $result?$result[0]["xml"]:"";
    }
}
