<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 2:32 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

if(isset($_POST["money"]))
{
    $bll = new BLL\UserBLL();
    $uid = SessionManager::get("UID");
    $money = $bll->getWallet($uid)+$_POST["money"];
    echo $bll->updateWallet($uid, $money);
}
else
{
    header("HTTP/1.1 500 error");
}

