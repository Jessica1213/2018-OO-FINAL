<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 27/05/2018
 * Time: 7:24 PM
 */

namespace DAL;


class ProductDAL extends DALBase
{
    public function getProducts($name) {
        $query = "select ";
        $query.= "PID, price, description, image, amount, category from product where name=?";
        $result=$this->exec($query, [$name], true);
        var_dump($result);
        return $result;
    }
}