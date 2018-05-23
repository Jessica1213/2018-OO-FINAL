<?php
namespace BLL;

use BLL\BLLBase;
use DAL\GameDAL;
use \SessionManager;

class GameBLL extends BLLBase
{
    public function __construct(&$dbm=null)
    {
        parent::__construct($dbm);
        $this->dal=new GameDAL($this->db);
    }

    public function store($uid, $question, $xml)
    {
        $this->dal->storeXml($uid, $question, $xml);
    }

    //TODO: not complete
    public function getProgress($uid)
    {
        $progress=[
            "puzzle"=>[0],
            "maze"=>array_fill(0,10,0),
            'bird'=>array_fill(0,10,0),
            'turtle'=>array_fill(0,10,0),
            'movie'=>array_fill(0,10,0),
            'pond'=>array_fill(0,10,0)
        ];
        $quets=$this->dal->getCompletedCode($uid);
        return $quets;
    }

    public function getCode($uid,$question)
    {
        return $this->dal->getCode($uid,$question);
    }
}
