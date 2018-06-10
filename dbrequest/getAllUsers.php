<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 9:17 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
$bll = new BLL\UserBLL();
echo json_encode($bll->getAlluser());