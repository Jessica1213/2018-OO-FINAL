<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/8
 * Time: 4:21 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

$bll = new BLL\UserBLL();
echo SessionManager::get("UID");

