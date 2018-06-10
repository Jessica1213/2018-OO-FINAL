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
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/user.js"></script>
    <script type="text/javascript" src="js/product.js"></script>
    <script type="text/javascript" src="js/jsrequest.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
</head>
<body>

<?php require_once ("navbar.php")?>
<div class="album py-5 ">
    <div class="container " align="center" style="margin-top: 5em">
        <div class="row">
            <div id = "functions" class="list-group col-md-2 col-xs-2"></div>
            <div class="col-md-10 col-xs-10">
                <div class="row">
                    <div class="col" style="width:auto;background:#eee">
                        <section class=" text-left " >
                            <div class="container">
                                <h2 valign="top"><?=$bll->getUsername(SessionManager::get("UID"))?>的錢包
                                <button type="button" class="btn " style="background-color:#FFD23C" onclick="window.location.href='topUp.php';"> + 加值 + </button></h2>
                            </div>
                        </section>
                        <h4 id="money" align="left" style="padding-left:1em;">目前餘額 &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                        <HR style="width:auto;" size="10">
                    </div>

                </div>
                <div class="row" style="width:auto;background:#eee">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">交易時間</th>
                            <th scope="col">物品</th>
                            <th scope="col">數量</th>
                            <th scope="col">金額</th>
                            <th scope="col">評價</th>
                        </tr>
                        </thead>
                        <tbody id="orderlist"></tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>
</div>
<script type="text/javascript">
    showOptions();
    document.getElementById("money").innerHTML += ("NT. $"+getWallet());
    document.getElementById("orderlist").innerHTML += showOrderlist();
</script>
</body>
</html>