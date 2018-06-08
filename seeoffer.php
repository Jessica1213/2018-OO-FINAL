<?php
require_once ("autoload.php");
//SessionManager::start();
//$bll = new BLL\UserBLL();
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
            <div class="col-md-2  col-xs-2">      
                <a href="Offer.php" class="list-group-item list-group-item-action list-group-item-info" style="width:auto;">優惠訊息</a>
                <a href="User.php" class="list-group-item list-group-item-action list-group-item-danger" style="width:auto;">使用者資訊</a>
            </div>
            <div class="col-md-10 col-xs-10">
                <div class="row">
                    <div class="col" style="width:auto;background:#eee">
                        <section class=" text-left " >
                            <div class="container">
                                <h2 valign="top">優惠內容</h2>
                            </div>
                        </section> 
                        <HR style="width:auto;" size="10">
                    </div>

                </div>
                
                <div class="row" style="width:auto;background:#eee">             
                    <form  action="" name="InfoForm" method="post" onsubmit="return false;">
                    <div class="col">
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">
                                <label >優惠名稱</label>
                                <label >優惠名稱</label>
                            </th>  
                        </tr>
                        <tr>
                            <th scope="row">
                                <label >優惠區間</label>
                                <div class="input-group" style = "width: 80%;" >
                                <label  class="form-control"type="text" style = "width: 20%;" >開始日期</label>
                                <label  class="form-control"type="text" style = "width: 20%;" >2016-08-04</label>
                                <label  class="form-control"type="text" style = "width: 20%;" > 到 截止時間</label>
                                <label  class="form-control"type="text" style = "width: 20%;" >2018-04-07</label>
                            </div>
                            </th>  
                        </tr>
                        <tr>
                        <th scope="row">類別<p>
                               選擇類別
                            </th> 
                        </tr>
                        
                        </tbody>
                        
                        </table>
                        <a class="btn btn-default" type="button" href="Offer.php" style="background-color:#CCBBFF">返回</a> 
                    </div>
                    </form>    
                </div>  
            </div>
           
        </div>

 </div>

        
    </div>  
</div> 
</div> 
    
</body>
</html>