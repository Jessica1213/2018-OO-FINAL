<?php
require_once ("autoload.php");
SessionManager::start();
require_once ("checkLogin.php");
$bll = new BLL\UserBLL();
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

</head>

<body>
<?php require_once ("navbar.php")?>

<div class="container" id="shoppingCartList">
    <form action="" name="" method="post" onsubmit="return false;">
        <table id = "shoppingCartList_Header">
            <tr>
                <td>商品</td>
                <td>單價</td>
                <td>數量</td>
                <td>價格</td>
                <td>取消購買</td>
            </tr>
        </table>
        <table id = "shoppingCartList_Footer">
            <tr>
                <td><label>Total Price：</label><input type="text" id="" name="priceOutput"></td>    <!-- 此行需加入：回傳總價格 -->
            </tr>
            <tr>
                <td>
                    <input class="button" type="submit" name=""  onclick="location.href='index.php'" value="繼續購物" >    <!-- 此行需更改：點擊後的目標網址 -->
                    <input class="button" type="submit" name="" onclick="location.href='#.html'" value="結帳"> <!-- 此行需更改：點擊後的目標網址 -->
                </td>
            </tr>
        </table>
    </form>
</div>

<script type="text/javascript">
    document.getElementById("shoppingCartList_Header").innerHTML += showShoppingCart();
</script>
</body>
</html>