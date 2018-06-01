<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/1
 * Time: 4:32 PM
 */
require_once ("../autoload.php");
SessionManager::start();

if(isset($_POST["account"])&&isset($_POST["password"])&&isset($_POST["name"])&&isset($_POST["email"])) {
    $bll = new BLL\UserBLL();
    echo $bll->addAccount($_POST["account"], hash('sha256',$_POST["password"]), $_POST["name"], $_POST["email"]);
}
else {
    header("HTTP/1.1 500 error");
}
