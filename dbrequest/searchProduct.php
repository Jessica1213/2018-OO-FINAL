<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 27/05/2018
 * Time: 7:18 PM
 */

SessionManager::start();

if(isset($_POST["name"])) {
    $bll = new BLL\ProductBLL();
    var_dump($_POST["name"]);
    echo  $_POST["name"];
//    echo $bll->searchProducts($_POST["name"]);
}
else {
    header("HTTP/1.1 500 error");
}
