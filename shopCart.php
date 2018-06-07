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
    <script type="text/javascript" src="js/jsrequest.js"></script>

</head>

<body>
<?php require_once ("navbar.php")?>

<div class="container" id="shoppingCartList">
    <form action="" name="" method="post" onsubmit="return false;">
        <table id = "shoppingCartList_Header"></table>
    </form>
</div>

<script type="text/javascript">
    document.getElementById("shoppingCartList_Header").innerHTML += showShoppingCart();
</script>
</body>
</html>