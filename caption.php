<?php
require_once ("autoload.php");
SessionManager::start();
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
            
          
                <div class="row">
                <div class="col-md-4 col-xs-4" style="wight:auto;background:#eee"style="height: 300px; width:100%;" >
                    <img src="thing/賣家新增商品.png" alt="..." class="img-thumbnail" style="height: 100%; width:100%;">
                    
                </div>  
                <div class="col-md-4 col-xs-4" style="wight:auto;background:#eee" style="height: 400px; width:100%;">
                    <img src="thing/賣家新增商品.png" alt="..." class="img-thumbnail" style="height: 100%; width:100%;">
                    
                </div>
                <div class="col-md-4 col-xs-4" style="wight:auto;background:#eee" style="height: 300px; width:100%;">
                    <img src="thing/賣家新增商品.png" alt="..." class="img-thumbnail" style="height: 100%; width:100%;">
                    
                </div>
                <HR style="width:auto;" size="10">
                </div>


                <div class="row" style="width:auto;background:#eee">
                    <form  action="" name="InfoForm" method="post" onsubmit="return false;">
                    <div class="col">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">
                                <h4>商品名稱</h4>
                                <label> 商品名稱</label>
                                </th>
                                
                            </tr>
                            </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                            <h4>商品介紹</h4>
                            <label> 商品介紹</label>
                            </th>  
                        </tr>
                        <tr>
                            <th scope="row">
                            <h4>價格</h4>
                            <label> 1000</label>
                                </th>
                        </tr>
                        <tr>
                            <th scope="row">
                            <h4>類別</h4>
                            <label> XXX</label>   
                            </th>  
                        </tr>
                        
                        
                        </tbody>
                        
                        </table>
                        <button class="btn "> 購買 </button>
                        <button class="btn "> 加入購物車 </button>
                    </div>
                    
                    </form>
                    
                </div>    
 
             

            </div>
           
        </div>



        
    </div>  
</div> 
</div> 
    
</body>
</html>