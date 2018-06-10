<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 8:09 PM
 */

require_once("autoload.php");
SessionManager::start();
require_once("checkLogin.php");
$bll = new BLL\UserBLL();
$userlevel =  $bll->checkUserLevel(SessionManager::get("UID"));
if($userlevel == "member") {
    header("HTTP/1.1 302 Redirect");
    header("Location: index.php");
    exit;
}