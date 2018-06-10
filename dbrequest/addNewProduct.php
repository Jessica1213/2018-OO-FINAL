<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 10:37 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

if(isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["des"]) && isset($_POST["price"]) && isset($_POST["amount"]) && isset($_POST["cate"])) {
    $bll = new BLL\ProductBLL();
    echo $bll->addNewProduct(SessionManager::get("UID"), $_POST["name"], $_POST["image"], $_POST["des"], $_POST["price"], $_POST["amount"], $_POST["cate"] );
}
else {
    header("HTTP/1.1 500 error");
}