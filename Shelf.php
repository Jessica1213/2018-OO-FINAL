<?php
require_once ("autoload.php");
SessionManager::start();
require_once ("checkLogin.php");
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
          
            <div class="row" style="width:auto;background:#eee">
                
                <div class="col-md-4 col-xs-4" >
                    <label><input class="form-control" id="image" type="text" placeholder="圖片網址"/></label>
                </div>
                <div class="col-md-8 col-xs-8" >
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th scope="col">商品名稱<p>
                                <input class="form-control" id="name" type="text" placeholder="商品名稱" maxlength="10" >
                                字數限制10
                                </th>  
                            </tr>
                            <tr>
                                <th scope="row">商品介紹<p>
                                    <textarea class="form-control"  id="description" rows="5" maxlength="300" placeholder="輸入商品介紹..."></textarea>
                                    字數限制300
                                </th>  
                            </tr>
                        </tbody>
                    </table>
                </div>    
            </div>

                <div class="row" style="width:auto;background:#eee">
                    <form  action="" name="productForm" method="post" onsubmit="return false;">
                    <div class="col">
                        <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">
                                價格<p>
                                <input class="form-control" name="price" type="number" min="0" placeholder="金額"maxlength="10" >
                                </th>
                        </tr>
                        <tr>
                            <th scope="row">
                                數量<p>
                                    <input class="form-control" name="amount" type="number" min="0" placeholder="數量"maxlength="10" >
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">
                                類別<p>
                                <select id="options" name="category" class="form-control"></select>
                            </th>  
                        </tr>
                        
                        
                        </tbody>
                        
                        </table>
                        <button class="btn btn-default" type="button" style="background-color:#CCBBFF" onclick="addNewProduct();">確認新增</button>
                    </div>
                    
                    </form>
                    
                </div>    
 
             

            </div>
           
        </div>



        
    </div>
<script type="text/javascript">
    document.getElementById("options").innerHTML += listCateOptions();
</script>
</body>
</html>