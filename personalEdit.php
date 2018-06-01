
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
    <div class="container " align="center">



        <div class="row">
            <div class="col-md-2">
                <a href="Introduce.php" class="list-group-item list-group-item-action" style="width:auto;" >介紹</a>
                <a href="commodity.php" class="list-group-item list-group-item-action list-group-item-warning" style="width:auto;">商品</a>
                <a href="assess.php" class="list-group-item list-group-item-action list-group-item-info" style="width:auto;">評價</a>
                <a href="wallet.php" class="list-group-item list-group-item-action list-group-item-success" style="width:auto;">錢包</a>
                <a href="Sales.php" class="list-group-item list-group-item-action list-group-item-danger" style="width:auto;">銷售</a>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col" style="width:auto;background:#eee">
                        <section class=" text-left " >
                            <div class="container">
                                <h2 align="top">***的檔案</h2>
                                <input type="text" placeholder="賣場介紹" >
                            </div>
                        </section>
                        <HR style="width:auto;" size="10">
                    </div>

                </div>
                <div class="row" style="wight:auto;background:#eee">
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">個人資料</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <label >email:</label>
                                    <input type="text" placeholder="原始email" >
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label >phone:</label>
                                    <input type="text" placeholder="原始phone">
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label >商場名稱:</label>
                                    <input type="text" placeholder="商場名稱">
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label >* 密碼:</label>
                                    <input type="text" placeholder="輸入原始密碼">
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label >* 確認密碼:</label>
                                    <input type="text" placeholder="再次確認">
                                </th>
                            </tr>

                            </tbody>

                        </table>
                        <button> 確認修改 </button>
                    </div>
                    <div class="col-md-4">
                        <img src="http://www.youyix.com/img/img.php?src=/uploads/allimg/151227/1-15122G205240-L.png&w=218&h=220&zc=1" class="img-fluid" alt="Responsive image" width="250" height="250">
                        <button> 更換頭貼 </button>
                    </div>
                </div>

            </div>

        </div>

    </div>




</div>


</body>
</html>