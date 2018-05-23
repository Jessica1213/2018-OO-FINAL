<?php
    require_once("./autoload.php");
    SessionManager::start();

$form=new FormVerification();
$results=$form->getResult();
if(isset($_POST["action"]) && $_POST["action"]=="register") {
    $form->setRequired(array(
        "account"=>"帳號",
        "email"=>"Email",
        "username"=>"名稱",
        "password"=>"密碼",
        "passwordconfirm"=>"密碼確認"
    ));
    $form->verify();
    $log=$form->getErrorLog();
    if($form->noError()) {

        if($results["password"]===$results["passwordconfirm"]){
            $bll=new BLL\UserBLL();

            $bll->addAccount($results["account"], hash('sha256',$results["password"]), $results["email"], $results["username"]);
            echo '<script language="javascript">';
            echo 'alert("註冊成功，將回到主畫面，請重新輸入帳號密碼。")';
            echo '</script>';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
//            header("HTTP/1.1 302 Redirect");
//            header("Location: index.php");
            exit;
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("密碼輸入不同，請重新輸入")';
            echo '</script>';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require_once("head.php");?>
    <link rel="stylesheet" href="./css/general.css" >
    <title>CT+X_Sign UP</title>
</head>
<body>
    <?php require_once("navbar.php");?>
<main>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> 註冊帳號 </h3>
                    <p>請以學號作為帳號</p>
                </div>
                <div class="panel-body">
                    <?=!empty($log)&&$log->logsCount()>0?$log->toString("log"):""?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group form-inline col-lg-10">
                                <label for="account">*帳號：</label>
                                <input class="form-control" type="text" id="account" name="account" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-10">
                                <label for="name">*姓名：</label>
                                <input class="form-control" type="text" id="username" name="username" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-10">
                                <label for="email">*Email：</label>
                                <input class="form-control" type="text" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-10">
                                <label for="password">*密碼：</label>
                                <input class="form-control" type="password" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-10">
                                <label for="passwordconfrim">*確認密碼：</label>
                                <input class="form-control" type="password" id="passwordconfirm" name="passwordconfirm" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-2">
                                <input type="hidden" name="action" value="register">
                                <button class="btn btn-primary" type="submit">註冊</button>
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


