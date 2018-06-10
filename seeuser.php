<?php
    require_once ("autoload.php");
    SessionManager::start();
    require_once ("checkLogin.php");
    require_once ("checkAdmin.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/user.js"></script>
    <script type="text/javascript" src="js/product.js"></script>
    <script type="text/javascript" src="js/jsrequest.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
</head>
<body>


<?php require_once ("navbar.php")?>

<div class="album py-5 ">
    <div class="container " align="center" style="margin-top: 5em">

        <div id="userInfo" class="row">
            <div id="functions" class="col-md-2  col-xs-2"></div>
        </div>

    </div>

</div>
<script type="text/javascript">
    showAdminOptions();
    var userID = "<?= $_GET["UID"]?>";
    window.onload = viewUserInfo(userID);
</script>

</body>
</html>