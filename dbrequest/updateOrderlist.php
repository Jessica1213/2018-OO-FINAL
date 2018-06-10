<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 3:29 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

if(isset($_POST["PID"]) && isset($_POST["paid"])) {
    $bll = new BLL\ProductBLL();
    echo $bll->paidOrderlist(SessionManager::get("UID"), $_POST["PID"], $_POST["paid"], date("Y/m/d H:i"));
}
else if(isset($_POST["PID"]) && isset($_POST["checked"])){
    echo "";
}
else {
    header("HTTP/1.1 500 error");
}