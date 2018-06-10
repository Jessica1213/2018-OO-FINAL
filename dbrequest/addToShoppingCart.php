<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/7
 * Time: 2:56 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

if(isset($_POST["PID"]) && isset($_POST["amount"]) && isset($_POST["SID"])) {
    $bll = new BLL\ProductBLL();
    echo $bll->addtoShoppingCart(SessionManager::get("UID"), $_POST["PID"], $_POST["SID"], $_POST["amount"], date("Y/m/d H:i:s"), 0);
}
else {
    header("HTTP/1.1 500 error");
}