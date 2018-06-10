<?php
require_once("autoload.php");
SessionManager::start();
require_once("checkLogin.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/user.js"></script>
    <script type="text/javascript" src="js/product.js"></script>
    <script type="text/javascript" src="js/jsrequest.js"></script>

</head>

<body>
<?php require_once ("navbar.php")?>
<div>
    <div  id="topUp">
        <h4 align="center">一次加值 10000 元</h4>
        <form  action="" name="topUpForm" method="post" onsubmit="return false;">
            <table>
                <tr>
                    <td><label for="cashCodeBook"></label><input class="text" type="text" id="cashCode1" name="cashCode1" placeholder="請輸入虛擬貨幣儲值卡第一行序號"></td>
                </tr>
                <tr>
                    <td><label for="cashCodeBook"></label><input class="text" type="text" id="cashCode2" name="cashCode2" placeholder="請輸入虛擬貨幣儲值卡第二行序號"></td>
                </tr>
                <tr>
                    <td>
                        <input class="button" type="button" name=""  onclick="history.back();" value="取消" >
                        <input class="button" type="submit" name="" onclick="topUpWallet()" value="確認加值">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>