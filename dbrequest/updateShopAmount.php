<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/7
 * Time: 6:08 PM
 */

require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

if(isset($_POST["PID"]) && isset($_POST["amount"])) {
    $bll = new BLL\ProductBLL();
    echo $bll->updatedShopAmount(SessionManager::get("UID"), $_POST["PID"], 0, $_POST["amount"]);
}
else {
    header("HTTP/1.1 500 error");
}