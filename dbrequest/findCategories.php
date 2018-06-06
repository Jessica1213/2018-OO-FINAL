<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 6/7/18
 * Time: 01:34
 */
require_once ("../autoload.php");
SessionManager::start();

$bll = new BLL\ProductBLL();
echo json_encode($bll->getAllCategories());