<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 6/3/18
 * Time: 13:50
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
if(isset($_POST["password"]) && isset($_POST["email"])) {
    $bll = new BLL\UserBLL();
    echo $bll->updateInfo(SessionManager::get("UID"), hash('sha256',$_POST["password"]), $_POST["email"]);
}
else {
    header("HTTP/1.1 500 error");
}