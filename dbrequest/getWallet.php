<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 12:01 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

$bll = new BLL\UserBLL();
echo $bll->getWallet(SessionManager::get("UID"));