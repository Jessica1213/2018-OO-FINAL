<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 27/05/2018
 * Time: 7:23 PM
 */

namespace BLL;

use BLL\BLLBase;
use DAL\ProductDAL;
use \SessionManager;

class ProductBLL extends BLLBase
{
    public function __construct(&$dbm=null)
    {
        parent::__construct($dbm);
        $this->dal=new ProductDAL($this->db);
    }

    public function searchProducts($name, $type) {
        return $this->dal->SearchProducts($name, $type);
    }

    public function getProductByID($pid) {
        return $this->dal->getProductByID($pid);
    }

    public function getAllCategories() {
        return $this->dal->getAllCategories();
    }

    public function getProductByUserID($uid) {
        return $this->dal->getProductByUseID($uid);
    }

    public function addtoShoppingCart($uid, $pid, $amount, $time, $paid)
    {
        return $this->dal->addtoShoppingCart($uid, $pid, $amount, $time, $paid);
    }

    public function updatedShopAmount($uid, $pid, $paid, $amount)
    {
        return $this->dal->updatedShopAmount($uid, $pid, $paid, $amount);
    }

    public function paidOrderlist($uid, $pid, $paid, $time)
    {
        return $this->dal->paidOrderlist($uid, $pid, $paid, $time);
    }

    public function getShoppingCart($uid, $paid)
    {
        return $this->dal->getShoppingCart($uid, $paid);
    }

    public function removeProductfromCart($uid, $pid, $paid)
    {
        return $this->dal->removeItemfromCart($uid, $pid, $paid);
    }
}