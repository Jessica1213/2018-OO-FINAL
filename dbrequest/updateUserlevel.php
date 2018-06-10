<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/11
 * Time: 12:12 AM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
if(isset($_POST["UID"]) && isset($_POST["level"])) {
    $bll = new BLL\UserBLL();
    echo $bll->updateUserlevel($_POST["UID"], $_POST["level"]);
}

else {
    header("HTTP/1.1 500 error");
}