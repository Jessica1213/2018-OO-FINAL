<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 10:51 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

if(isset($_POST["name"])) {
    $bll = new BLL\ProductBLL();
    echo $bll->getProductID($_POST["name"])["PID"];
}
else {
    header("HTTP/1.1 500 error");
}