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
        $query = "select ";
        $query.= "PID, name, price, description, amount, category from product where name=?";
        $result=$this->exec($query, [$name], true);
        return $result;
    }
}