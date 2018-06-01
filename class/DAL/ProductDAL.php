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
    public function getProducts($name) {
        $item="%";
        $item.=$name;
        $item.="%";
        $query = "select ";
        $query.= "PID, name, price, description, image, amount, category from product where name like ?";
        $result=$this->exec($query, [$item], true);
        return $result;
    }
}