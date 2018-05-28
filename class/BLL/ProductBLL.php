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

class ProductBLL extends BLLBase
{
    public function __construct(&$dbm=null)
    {
        parent::__construct($dbm);
        $this->dal=new ProductDAL($this->db);
    }

    public function searchProducts($name) {
        return $this->dal->getProducts($name);
    }
}