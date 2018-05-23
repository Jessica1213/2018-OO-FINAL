<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 9/3/17
 * Time: 21:48
 */
namespace DAL;
class CodeDAL extends DALBase
{
    public function isUpdate($uid,$question)
    {
        if($question[0]=="P"||$question[0]=="H") {
            $query = "select ";
            $query.= "count(1) AC from homework A where A.uid=? and A.questionNum=?";
            $result=$this->exec($query,[$uid,$question],true);
            return $result[0]["AC"]>0;
        }
        elseif($question[0]=="T") {
            $query = "select ";
            $query.= "count(1) AC from examresult A where A.uid=? and A.questionNum=?";
            $result=$this->exec($query,[$uid,$question],true);
            return $result[0]["AC"]>0;
        }
        elseif($question[0]=="F") {
            $query = "select ";
            $query.= "count(1) AC from finalexamresult A where A.uid=? and A.questionNum=?";
            $result=$this->exec($query,[$uid,$question],true);
            return $result[0]["AC"]>0;
        }
    }
    public function storeXml($uid, $questionNum ,$xmlcode)
    {
        if($questionNum[0]=='P'||$questionNum[0]=='H') {
            $query="";
            if ($this->isUpdate($uid,$questionNum)) {
                $query.="update homework ";
                $query.="SET xmlcode=:xmlcode ";
                $query.="WHERE uid=:uid and questionNum=:questionNum";
            } else {
                $query="insert ";
                $query.="into homework (uid, questionNum, xmlcode)";
                $query.=" VALUES (:uid, :questionNum, :xmlcode)";
            }
            $result=$this->exec($query,[
                ":uid"=>$uid,
                ":questionNum"=>$questionNum,
                ":xmlcode"=>$xmlcode
            ],false,true);
        }
        elseif ($questionNum[0]=='T') {
            $query="";
            if ($this->isUpdate($uid,$questionNum)) {
                $query.="update examresult ";
                $query.="SET xmlcode=:xmlcode ";
                $query.="WHERE uid=:uid and questionNum=:questionNum";
            } else {
                $query="insert ";
                $query.="into examresult (uid, questionNum, xmlcode)";
                $query.=" VALUES (:uid, :questionNum, :xmlcode)";
            }
            $result=$this->exec($query,[
                ":uid"=>$uid,
                ":questionNum"=>$questionNum,
                ":xmlcode"=>$xmlcode
            ],false,true);
        }
        elseif ($questionNum[0]=='F') {
            $query="";
            if ($this->isUpdate($uid,$questionNum)) {
                $query.="update finalexamresult ";
                $query.="SET xmlcode=:xmlcode ";
                $query.="WHERE uid=:uid and questionNum=:questionNum";
            } else {
                $query="insert ";
                $query.="into finalexamresult (uid, questionNum, xmlcode)";
                $query.=" VALUES (:uid, :questionNum, :xmlcode)";
            }
            $result=$this->exec($query,[
                ":uid"=>$uid,
                ":questionNum"=>$questionNum,
                ":xmlcode"=>$xmlcode
            ],false,true);
        }
        elseif($questionNum[0]=='E') {
            $query="";
            $query.="update examplecode ";
            $query.="SET xmlcode=:xmlcode ";
            $query.="WHERE questionNum=:questionNum";
            $result=$this->exec($query,[
                ":questionNum"=>$questionNum,
                ":xmlcode"=>$xmlcode
            ],false,true);
        }
    }
    public function getQuestion($questionnum) {
        $query="select ";
        $query.="question from ";
        if($questionnum[0]=='E'){
            $query.="examplecode ";
        }
        elseif ($questionnum[0]=='P'||$questionnum[0]=='H') {
            $query.="hwcontent ";
        }
        elseif ($questionnum[0]=='T' || $questionnum[0]=='F'){
            $query.="examquestion ";
        }
        $query.="A where A.questionNum=?";
        $result = $this->exec($query, [$questionnum], true);
        return $result[0]["question"];
    }
    public function getExampleCode($questionnum) {
        $query="select ";
        $query.="xmlcode from examplecode A where A.questionNum=?";
        $result=$this->exec($query,[$questionnum],true);
        return $result[0]["xmlcode"];
    }
    public function getCode($uid, $question)
    {
        $query="select ";
        $query.="xmlcode from ";
        if($question[0]=='P'||$question[0]=='H') {
            $query.="homework ";
        }
        elseif($question[0]=='T') {
            $query.="examresult ";
        }
        elseif($question[0]=='F') {
            $query.="finalexamresult ";
        }
        $query.="A where A.uid=? and A.questionNum=?";
        $result=$this->exec($query,[$uid, $question],true);
        return $result?$result[0]["xmlcode"]:"";
    }
    public function getExamCode($uid, $question)
    {
        $query="select ";
        $query.="xmlcode from ";
        if($question[0]=='T') {
            $query.="examresult ";
        }
        elseif($question[0]=='F') {
            $query.="finalexamresult ";
        }
        $query.="A where A.uid=? and A.questionNum=?";
        $result=$this->exec($query,[$uid, $question],true);
        return $result?$result[0]["xmlcode"]:"";
    }
    public function getCompletedCode($uid, $question)
    {
        $query="select ";
        $query.="xmlcode from homework A where A.uid=? and A.questionNum=?";
        $result=$this->exec($query,[$uid,$question],true);
        return $result?$result[0]["xmlcode"]:"";
    }
    public function getExamPartialCode($questionnum) {
        $query="select ";
        $query.="xmlcode from examquestion A where A.questionNum=?";
        $result = $this->exec($query, [$questionnum], true);
        return $result[0]["xmlcode"];
    }
    public function getExamBackupCode($uid, $question) {
        $query="select ";
        $query.="xmlcode from exambackup A where A.uid=? and A.questionNum=?";
        $result=$this->exec($query,[$uid, $question],true);
        return $result?$result[0]["xmlcode"]:"";
    }
    public function getHomeworkPartial($questionnum) {
        $query="select ";
        $query.="xmlcode from hwcontent A where A.questionNum=?";
        $result=$this->exec($query,[$questionnum],true);
        return $result[0]["xmlcode"];
    }
    public function getHomeworkAnswer($questionnum) {
        $query="select ";
        $query.="xmlcode from hwanswer A where A.questionNum=?";
        $result=$this->exec($query,[$questionnum],true);
        return $result[0]["xmlcode"];
    }
}