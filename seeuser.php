<?php
    require_once ("autoload.php");
    SessionManager::start();
 //   require_once ("checkLogin.php");
 //   $bll = new BLL\UserBLL();
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
    <div class="container " align="center" style="margin-top: 15vh">

        <div class="row">
            <div class=" col-md-2 col-xs-2">
                <a href="Offer.php" class="list-group-item list-group-item-action list-group-item-info" style="width:auto;">優惠訊息</a>
                <a href="User.php" class="list-group-item list-group-item-action list-group-item-danger" style="width:auto;">使用者資訊</a>
            </div>
            <div class="col-md-10 col-xs-10">
                <div class="row">
                    <div class="col" style="width:auto;background:#eee">
                        <section class=" text-left " >
                            <div class="container">
                                <h2 align="top"><?=$bll->getUsername(SessionManager::get("UID"))?>的檔案</h2>
                                <h4> 賣場介紹 </h4>
                            </div>
                        </section>
                        <HR style="width:auto;" size="10">
                    </div>
                </div>
                <div class="row" style="width:auto;background:#eee">
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
                                    <label> <?=$bll->getEmail(SessionManager::get("UID"))?> </label>
                                </th>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <label >商場名稱:</label>
                                    <label> 商場名稱</label>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                        <a href="User.php" class="btn btn-default" type="button" style="background-color:#CCBBFF" >返回</a> 
                    </div>
                    <div class="col-md-4">
                        <img src="<?=$bll->getImage(SessionManager::get("UID"))?>" class="img-fluid" alt="Responsive image" width="250" height="250">

                    </div>
                </div>

            </div>

        </div>

    </div>

</div>


</body>
</html>