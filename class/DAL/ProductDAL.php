<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 27/05/2018
 * Time: 7:24 PM
 */

namespace DAL;
use DAL\DALBase;

class ProductDAL extends DALBase
{
    public function SearchProducts($keyword, $type) {
        if($type == "name") {
            $item="%";
            $item.=$keyword;
            $item.="%";
            $query = "select ";
            $query.= "PID, UID, name, price, description, image, amount, category from product where name like ?";
            $result=$this->exec($query, [$item], true);

        }
        else {
            $query = "select ";
            $query.= "PID, UID, name, price, description, image, amount, category from product where category=?";
            $result=$this->exec($query, [$keyword], true);
        }

        return $result;
    }

    public function getProductByID($pid)
    {
        $query = "select ";
        $query.= "PID, UID, name, price, description, image, amount, category from product where PID=?";
        $result=$this->exec($query, [$pid], true);
        return $result?$result[0]:false;
    }

    public function getProductByUseID($uid)
    {
        $query = "select ";
        $query.= "PID, UID, name, price, description, image, amount, category from product where UID=?";
        $result=$this->exec($query, [$uid], true);
        return $result;
    }

    public function getAllCategories()
    {
        $query = "select ";
        $query.= "DISTINCT category from product";
        $result = $this->exec($query, [], true);
        return $result;
    }

    public function getShoppingCart($uid, $paid)
    {
        $query = "select ";
        $query.= "UID, PID, amount, time, checked from shoppingCart A ";
        $query.= "where A.uid=? and A.paid=?";
        $result = $this->exec($query, [$uid, $paid], true);
        return $result;
    }

    public function addtoShoppingCart($uid, $pid, $amount, $time, $paid)
    {
        $comment = "";
        $checked = 0;
        $query = "insert ";
        $query.= "into ";
        $query.= "shoppingCart ";
        $query.= "(UID, PID, amount, time, paid, checked, comment)";
        $query.= " VALUES ('".$uid."','".$pid."','".$amount."','". $time."','".$paid."','".$checked."','".$comment."')";
        $this->exec($query, [
            "UID"=>$uid,
            "productID"=>$pid,
            "amount"=>$amount,
            "time"=>$time,
            "paid"=>$paid,
            "checked"=>$checked,
            "comment"=>$comment
        ],  false, true);
        return "true";
    }

    public function updatedShopAmount($uid, $pid, $paid, $amount)
    {
        $query="update shoppingCart ";
        $query.="SET amount=:amount ";
        $query.="WHERE uid=:uid and pid=:pid and paid=:paid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":pid"=>$pid,
            ":paid"=>$paid,
            ":amount"=>$amount
        ],false,true);
    }

    public function removeItemfromCart($uid, $pid, $paid)
    {
        $query="delete ";
        $query.="from shoppingCart ";
        $query.="WHERE uid=:uid and pid=:pid and paid=:paid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":pid"=>$pid,
            ":paid"=>$paid
        ],false,true);
    }

    public function paidOrderlist($uid, $pid, $paid, $time)
    {
        $query="";
        $query.="update shoppingCart ";
        $query.="SET paid=:paid, time=:time ";
        $query.="WHERE uid=:uid and pid=:pid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":pid"=>$pid,
            ":paid"=>$paid,
            ":time"=>$time
        ],false,true);
    }
}