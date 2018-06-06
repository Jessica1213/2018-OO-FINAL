<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 6/7/18
 * Time: 01:55
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
$bll = new BLL\ProductBLL();
echo json_encode($bll->getProductByUserID(SessionManager::get("UID")));