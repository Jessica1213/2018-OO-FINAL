<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 6:03 PM
 */

require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");
if(isset($_POST["PID"]) && isset($_POST["amount"])) {
    $bll = new BLL\ProductBLL();
    $amount = $bll->getProductByID($_POST["PID"])["amount"] + $_POST["amount"];
    echo $bll->updateStock($_POST["PID"], $amount);
}
else {
    header("HTTP/1.1 500 error");
}