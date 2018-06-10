<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 6:56 PM
 */
require_once ("../autoload.php");
SessionManager::start();
require_once ("../checkLogin.php");

if(isset($_POST["BID"]) && isset($_POST["PID"]) && isset($_POST["comment"]))
{
    $bll = new BLL\ProductBLL();
    echo $bll->updateComment($_POST["BID"], $_POST["PID"], $_POST["comment"]);
}
else
{
    header("HTTP/1.1 500 error");
}