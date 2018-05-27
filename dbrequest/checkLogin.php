<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 27/05/2018
 * Time: 8:13 PM
 */
if(isset($_POST["account"]) && isset($_POST["password"])) {
    $bll = new BLL\UserBLL();
    echo $bll->logIn($_POST["account"], $_POST["password"]);
}
else {
    header("HTTP/1.1 500 error");
}