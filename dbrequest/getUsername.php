<?php
/**
 * Created by PhpStorm.
 * User: jessica
 * Date: 2018/6/10
 * Time: 8:47 PM
 */
if(isset($_POST["UID"]))
{
    $bll = new BLL\UserBLL();
    echo $bll->getUsername($_POST["UID"]);
}
else {
    header("HTTP/1.1 500 error");
}