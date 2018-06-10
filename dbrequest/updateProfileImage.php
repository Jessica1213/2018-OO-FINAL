<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 7:27 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
if(isset($_POST["image"]))
{
    $bll = new BLL\UserBLL();
    echo $bll->updateProfile(SessionManager::get("UID"), $_POST["image"]);
}
else {
    header("HTTP/1.1 500 error");
}