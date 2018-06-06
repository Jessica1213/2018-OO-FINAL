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
    public function getProducts($keyword, $type) {
        if($type == "name") {
            $item="%";
            $item.=$keyword;
            $item.="%";
            $query = "select ";
            $query.= "PID, name, price, description, image, amount, category from product where name like ?";
            $result=$this->exec($query, [$item], true);

        }
        else {
            $query = "select ";
            $query.= "PID, name, price, description, image, amount, category from product where category=?";
            $result=$this->exec($query, [$keyword], true);
        }

        return $result;
    }

    public function findProduct($pid)
    {
        $query = "select ";
        $query.= "PID, name, price, description, image, amount, category from product where PID=?";
        $result=$this->exec($query, [$pid], true);
        return $result?$result[0]:false;
    }
}