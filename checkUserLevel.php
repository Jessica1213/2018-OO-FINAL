<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 6/3/18
 * Time: 00:32
 */
require_once("../autoload.php");
SessionManager::start();
require_once("../checkLogin.php");
$bll = new BLL\UserBLL();
echo $bll->checkUserLevel(SessionManager::get("UID"));
