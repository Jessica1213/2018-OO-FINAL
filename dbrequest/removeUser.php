<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 11:42 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
if(isset($_POST["UID"]))
{
    $bll = new BLL\UserBLL();
    echo $bll->removeUser($_POST["UID"]);
}
else {
    header("HTTP/1.1 500 error");
}