<?php
require_once ("autoload.php");
SessionManager::start();
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
            <div class="list-group col-md-2">
                        <a href="Introduce.php" class="list-group-item list-group-item-action" style="wight:auto;" >介紹</a>
                        <a href="commodity.php" class="list-group-item list-group-item-action list-group-item-warning" style="wight:auto;">商品</a>
                        <a href="assess.php" class="list-group-item list-group-item-action list-group-item-info" style="wight:auto;">評價</a>
                        <a href="wallet.php" class="list-group-item list-group-item-action list-group-item-success" style="wight:auto;">錢包</a>
                        <a href="Sales.php" class="list-group-item list-group-item-action list-group-item-danger" style="wight:auto;">銷售</a>   
            </div>
            <div class="col-md-10">
                <div class="row">
                <div class="col" style="wight:auto;background:#eee">
                    <section class=" text-left " >
                        <div class="container">
                            <h2 align="top"><?=$bll->getUsername(SessionManager::get("UID"))?>的檔案</h2>
                            <input type="text" placeholder="賣場介紹" >
                        </div>
                    </section>
                    <HR style="width:auto;" size="10">
                </div>  
                
                </div>
                <div class="row" style="width:auto;background:#eee">
                    <form  action="" name="InfoForm" method="post" onsubmit="return false;">
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
                                <label >email: </label>
                                <input name="email" type="text" placeholder="<?=$bll->getEmail(SessionManager::get("UID"))?>" >
                            </th>  
                        </tr>
                        <tr>
                            <th scope="row">
                            <label >* 新密碼: </label>
                            <input name="pwd" type="password" placeholder="新密碼">
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">
                            <label >* 確認密碼: </label>
                            <input name="confrim" type="password" placeholder="再次確認">
                            </th>
                        </tr>
                        
                        </tbody>
                        
                        </table>
                        <button onclick="UpdatePersonalInfo()"> 確認修改 </button>
                    </div>
                    </form>
                    <div class="col-md-4">
                        <img src="<?=$bll->getImage(SessionManager::get("UID"))?>" class="img-fluid" alt="Responsive image" width="250" height="250">
                        <button> 更換頭貼 </button>
                    </div>
                </div>    
 
                </div>

            </div>
           
        </div>



        
    </div>  
</div> 
</div> 
    
</body>
</html>