<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/7
 * Time: 12:19 AM
 */
require_once ("../autoload.php");
SessionManager::start();

if(isset($_POST["PID"])) {
    $bll = new BLL\ProductBLL();
    echo json_encode($bll->findProduct($_POST["PID"]));
}
else {
    header("HTTP/1.1 500 error");
}