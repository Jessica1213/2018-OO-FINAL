<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 5:28 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
$bll = new BLL\ProductBLL();
echo json_encode($bll->getSoldRecord(SessionManager::get("UID")));