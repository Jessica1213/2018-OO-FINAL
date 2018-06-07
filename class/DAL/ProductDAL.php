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

    public function addtoShoppingCart($uid, $pid, $amount, $time, $paid)
    {
        $query = "insert ";
        $query.= "into ";
        $query.= "shoppingCart ";
        $query.= "(UID, productID, amount, create_at, paid)";
        $query.= " VALUES ('".$uid."','".$pid."','".$amount."','". $time."','".$paid."')";
        $this->exec($query, [
            "UID"=>$uid,
            "productID"=>$pid,
            "amount"=>$amount,
            "create_at"=>$time,
            "paid"=>$paid
        ],  false, true);
        return "true";
    }

    public function updatedShoppingCart($uid, $pid, $paid)
    {
        $query="";
        $query.="update shoppingCart ";
        $query.="SET paid=:paid ";
        $query.="WHERE uid=:uid and pid=:pid";
        $result=$this->exec($query,[
            ":uid"=>$uid,
            ":pid"=>$pid,
            ":paid"=>$paid
        ],false,true);
    }
}