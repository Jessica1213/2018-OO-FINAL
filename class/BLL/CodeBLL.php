<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 9/3/17
 * Time: 21:48
 */
namespace BLL;
use DAL\CodeDAL;
class CodeBLL extends BLLBase
{
    public function __construct(&$dbm=null)
    {
        parent::__construct($dbm);
        $this->dal=new CodeDAL($this->db);
    }
    public function store($uid, $question, $xml)
    {
        echo $this->dal->storeXml($uid, $question, $xml);
    }
    public function getCode($uid, $question)
    {
        echo $this->dal->getCompletedCode($uid,$question);
    }
    public function getQuestion($question)
    {
        echo $this->dal->getQuestion($question);
    }
    public function getExampleCode($question)
    {
        echo $this->dal->getExampleCode($question);
    }
    public function getXMLCode($uid, $question) {
        $edited = $this->dal->getCode($uid, $question);
        if($edited) { //has been edited
            echo $edited;
        }
        else  {
            if($question[0]=='P'||$question[0]=='H') {
                $bll = new UserBLL();
                $level = $bll->checkUserLevel($uid);
                if($level==="teacher" || $level === "public") {
                    echo $this->dal->getHomeworkAnswer($question);
                }
                else {
                    echo $this->dal->getHomeworkPartial($question);
                }
            }
            elseif($question[0]=='T') {
                echo $this->dal->getExamPartialCode($question);
            }
        }
    }
    public function getHomeworkCode($uid, $question)
    {
        $edited = $this->dal->getCode($uid, $question);
        if($edited) { //has been edited
            echo $edited;
        }
        else { //first time
            $bll = new UserBLL();
            $level = $bll->checkUserLevel($uid);
            if($level==="teacher" || $level === "public") {
                echo $this->dal->getHomeworkAnswer($question);
            }
            else {
                echo $this->dal->getHomeworkPartial($question);
            }
        }
    }
    public function getExamCode($uid, $question) {
        $edited = $this->dal->getCode($uid, $question);
        if($edited) { //has been edited
            echo $edited;
        }
        else { //first time
            echo $this->dal->getExamPartialCode($question);
        }
    }
    public function getExamBackupCode($uid, $question) {
        echo $this->dal->getExamBackupCode($uid, $question);
    }
}