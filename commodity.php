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
</head>
<body>


<?php require_once ("navbar.php")?>

<div class="album py-5 ">
    <div class="container " align="center" style="margin-top: 5em">
        <div class="row">
            <div class="col-md-2 col-xs-2">
                        <a href="Introduce.php" class="list-group-item list-group-item-action" style="width:auto;" >介紹</a>
                        <a href="commodity.php" class="list-group-item list-group-item-action list-group-item-warning" style="width:auto;">商品</a>
                        <a href="assess.php" class="list-group-item list-group-item-action list-group-item-info" style="width:auto;">評價</a>
                        <a href="wallet.php" class="list-group-item list-group-item-action list-group-item-success" style="width:auto;">錢包</a>
                        <a href="Sales.php" class="list-group-item list-group-item-action list-group-item-danger" style="width:auto;">銷售</a>
            </div>
            <div class="col-md-10 col-xs-10">
                <div class="row">
                    <div class="col" style="width:auto;background:#eee">
                        <section class=" text-left " >
                            <div class="container">
                                <h2 valign="top"><?=$bll->getUsername(SessionManager::get("UID"))?>的商品</h2>
                            </div>
                        </section>
                        <HR style="width:auto;" size="10">
                        <section class="col-xs-12 col-xs-offset-3">
                            <form class="form-horizo​​ntal" role="form">
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <select  id="sort" class="form-control"  style = "width: auto;" onchange="showPersonalItems();">
                                            <option value="1">價格少到多</option>
                                            <option value="2">價格多到少</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
                <div id = "itemlist"></div>
            </div>

        </div>

    </div>
 </div>
<script type="text/javascript">
    showPersonalItems();
</script>
    
</body>
</html>