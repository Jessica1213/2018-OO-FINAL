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
    <script type="text/javascript" src="js/jsrequest.js"></script>
</head>
<body>


<?php require_once ("navbar.php")?>

<div class="album py-5 ">
    <div class="container " align="center" style="margin-top: 15vh">

        <div class="row">
            
          
            <div class="row" style="height: 350px; width:auto;background:#eee">
                
                <div class="col-md-4 col-xs-4" >
                    <img src="thing/賣家新增商品.png" alt="..." class="img-thumbnail" style="height: 100%; width:100%;">
                    <button > 選擇照片 </button>
                </div>
                <div class="col-md-8 col-xs-8" >
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="col">商品名稱<p>
                                <input class="form-control" type="text" placeholder="商品名稱"maxlength="10" >
                                字數限制10
                                <div >0 / 10</div> //看看可不可以計算出現在寫幾個字
                                </th>  
                            </tr>
                            <tr>
                                <th scope="row">商品介紹<p>
                                    <textarea class="form-control"  rows="5" maxlength="300">輸入商品介紹...</textarea>
                                    字數限制300
                                </th>  
                            </tr>
                        </tbody>
                    </table>
                </div>    
            </div>


                <div class="row" style="width:auto;background:#eee">
                    <form  action="" name="InfoForm" method="post" onsubmit="return false;">
                    <div class="col">
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">
                                價格<p>
                                <input class="form-control" type="number" placeholder="金額"maxlength="10" >
                                字數限制10
                                <div >0 / 10</div>
                                </th>
                        </tr>
                        <tr>
                            <th scope="row">
                                類別<p>
                                <select class="form-control">
                                    <option >餐具</option>
                                    <option >茶具</option>
                                    <option >文具</option>
                                    <option >衣服</option>
                                </select>
                            </th>  
                        </tr>
                        
                        
                        </tbody>
                        
                        </table>
                        <button > 確認修改 </button>
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