<?php
require_once("./autoload.php");
SessionManager::start();
if(BLL\UserBLL::isLogIn()) {
    header("HTTP/1.1 302 Redirect");
    header("Location: main.php");
    exit;
}
$form=new FormVerification();
$results=$form->getResult();
if(isset($_POST["action"]) && $_POST["action"]=="log-in") {
    $form->setRequired(array(
        "account"=>"帳號",
        "password"=>"密碼",
    ));
    $form->verify();
    $log=$form->getErrorLog();
    if($form->noError()) {
        $bll=new BLL\UserBLL();
        if($bll->logIn($results["account"],$results["password"])) {
//            $date = date('Y-m-d H:i:s');
//            $bll->timestamp('login', $date, '');
            header("HTTP/1.1 302 Redirect");
            header("Location: main.php");
            exit;
        } else {
            $log->add("帳號或密碼不正確!");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php");?>
    <title>Shopping Website</title>
    <link href="./css/general.css" rel="stylesheet">
</head>
<body>
<main>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-5">
            <img id="logo" src="./resource/icon/logo_ch.png" style="width: 30em; height: 20em;">
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> 登入系統 </h3>
                </div>
                <div class="panel-body">

                    <?=!empty($log)&&$log->logsCount()>0?$log->toString("log"):""?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group form-inline col-lg-8">
                                <label for="account">*帳號：</label>
                                <input class="form-control" type="text" id="account" name="account" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-8">
                                <label for="password">*密碼：</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-2">
                                <input type="hidden" name="action" value="log-in">
                                <button class="btn btn-primary" type="submit">登入</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php require_once("./footer.php");?>
</footer>
</body>
</html>