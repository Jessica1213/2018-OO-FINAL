<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/login_function.js"></script>
    <script type="text/javascript" src="js/product.js"></script>
</head>
<body>
<?php require_once ("navbar.php") ?>
<div class="wrapper row5">
    <div  id="login">
        <form  action="login.php" name="loginForm" >
            <table>
                <tr>
                    <th>Register</th>
                </tr>
                <tr>
                    <td>輸入帳號 : <input class="text" type="text" name="username"></td>
                </tr>
                <tr>
                    <td>輸入信箱 : <input class="text" type="text" name="e-mail"></td>
                </tr>
                <tr>
                    <td>輸入密碼 : <input class="text" type="password" name="password"></td>
                </tr>
                <tr>
                    <td>確認密碼 : <input class="text" type="password" name="password2"></td>
                </tr>
                <tr>
                    <!--45 須將帳號密碼資訊寫入置資料庫-->
                    <td><input class="button" formmethod="post" type="submit" name="submit"onclick="return checkRegister();" value="確定"></td>
                </tr>
            </table>
        </form>
        </div>
        </div>

</body>
</html>