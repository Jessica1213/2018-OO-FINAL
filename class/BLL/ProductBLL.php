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
        return $this->dal->getProductByID($pio);
    }

    public function getAllCategories() {
        return $this->dal->getAllCategories();
    }

    public function getProductByUserID($uid) {
        return $this->dal->getProductByUseID($uid);
    }
}