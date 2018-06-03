<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 6/3/18
 * Time: 00:32
 */
require_once ("../autoload.php");
SessionManager::start();

if(isset($_POST["state"])) {
    $bll = new BLL\UserBLL();
    echo $bll->updateState(SessionManager::get("UID"),$_POST["state"]);
}
else {
    header("HTTP/1.1 500 error");
}