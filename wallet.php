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
</head>
<body>

<?php require_once ("navbar.php")?>
<div class="album py-5 ">
    <div class="container " align="center" style="margin-top: 15vh">
        <div class="row">
            <div class="list-group col-md-2 col-xs-2" >

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
                                <h2 valign="top"><?=$bll->getUsername(SessionManager::get("UID"))?>的錢包</h2>

                            </div>
                        </section>
                        <HR style="width:auto;" size="10">
                        <label type="text" >開始日期</label>
                        <input  type="date"  required="required"
                                min="<?php echo date ("y-m-d",strtotime("-1months"));?>"
                                max="<?php echo date ("y-m-d",strtotime("+1months"));?>">
                        <label type="text" > 到 </label>
                        <label type="text" >截止時間</label>
                        <input  type="date"  required="required"
                                min="<?php echo date ("y-m-d",strtotime("-1months"));?>"
                                max="<?php echo date ("y-m-d",strtotime("+1months"));?>">
                        <button> 查詢 </button>
                    </div>

                </div>
                <div class="row" style="width:auto;background:#eee">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">交易時間</th>
                            <th scope="col">物品</th>
                            <th scope="col">收入</th>
                            <th scope="col">支出</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>time</td>
                            <td>thing</td>
                            <td>金額</td>
                            <td>金額</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>time</td>
                            <td>thing</td>
                            <td>金額</td>
                            <td>金額</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>time</td>
                            <td>thing</td>
                            <td>金額</td>
                            <td>金額</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>
</div>
</div>

</body>
</html>