<?php
/**
 * Created by PhpStorm.
 * User: jessica
 */

require_once("autoload.php");
SessionManager::start();
require_once("checkLogin.php");

$form = new FormVerification();
$results = $form->getResult();
$bll = new BLL\UserBLL();
if($bll->getAccount(SessionManager::get("UID"))==="key") {
    echo '<script language="javascript">';
    echo 'alert("公用帳號，禁止修改密碼");';
    echo 'window.location = "https://ctx.csie.ntnu.edu.tw/main.php";';
    echo '</script>';
    exit;
}
else if (isset($_POST["action"]) && $_POST["action"] == "changepwd") {
    $form->setRequired(array(
        "newpassword" => "新密碼",
        "passwordcheck" => "密碼確認"
    ));
    $form->verify();
    $log = $form->getErrorLog();
    if ($form->noError()) {

        if ($results["newpassword"] === $results["passwordcheck"]) {
            $bll->updatePwd(hash('sha256', $_POST["newpassword"]));
            echo '<script language="javascript">';
            echo 'alert("密碼修改成功，請重新登入");';
            echo 'window.location = "https://ctx.csie.ntnu.edu.tw/logout.php";';
            echo '</script>';
            exit;
        } else {
            echo '<script language="javascript">';
            echo 'alert("「新密碼」與「確認密碼」不一致，請重新輸入。")';
            echo '</script>';
            echo '<meta http-equiv=REFRESH CONTENT=2;>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php"); ?>
    <title>CT+X</title>
    <link href="./css/general.css" rel="stylesheet">
</head>
<body>
<?php require_once("navbar.php"); ?>
<main>
    <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3> 個人資料 </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="form-group form-inline col-lg-12">
                            <label for="Name">姓名：</label>
                            <?= $bll->getUsername(SessionManager::get('UID')) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-inline col-lg-12">
                            <label for="Name">帳號（學號）：</label>
                            <?= $bll->getAccount(SessionManager::get('UID')) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-inline col-lg-12">
                            <label for="Name">系級：</label>
                            <?= $bll->getDepartment(SessionManager::get('UID')) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-inline col-lg-12">
                            <label for="Name">年級：</label>
                            <?= $bll->getGrade(SessionManager::get('UID')) ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group form-inline col-lg-12">
                            若要修改密碼，請輸入新密碼
                        </div>
                    </div>
                    <?= !empty($log) && $log->logsCount() > 0 ? $log->toString("log") : "" ?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="form-group form-inline col-lg-12">
                                <label for="newpassword">新密碼：</label>
                                <input class="form-control" type="password" id="newpassword" name="newpassword"
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-12">
                                <label for="passwordcheck">密碼確認：</label>
                                <input class="form-control" type="password" id="passwordcheck" name="passwordcheck" required>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="row">
                            <div class="form-group form-inline col-lg-4">
                                <input type="hidden" name="action" value="changepwd">
                                <button class="btn btn-primary" type="submit">確認修改</button>
                            </div>
                            <div class="col-lg-4"><a href="/main.php" class="btn btn-primary">取消修改</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <?php require_once("./footer.php"); ?>
</footer>
</body>
</html>
