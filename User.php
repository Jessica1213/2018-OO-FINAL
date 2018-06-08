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
            <div class="col-md-2  col-xs-2">      
                <a href="Offer.php" class="list-group-item list-group-item-action list-group-item-info" style="width:auto;">優惠訊息</a>
                <a href="User.php" class="list-group-item list-group-item-action list-group-item-danger" style="width:auto;">使用者資訊</a>
            </div>
            <div class="col-md-10 col-xs-10">
                <div class="row">
                    <div class="col" style="width:auto;background:#eee">
                        <section class=" text-left " >
                            <div class="container">
                                <h2 valign="top">所有使用者資料</h2>
                            </div>
                        </section> 
                        <HR style="width:auto;" size="10">
                    </div>

                </div>
                
                <div class="row" style="width:auto;background:#eee">
                <br>
                <section class="col-xs-12 col-xs-offset-3">
                    <form class="form-horizo​​ntal" role="form">
                        <div class="col-xs-6">
                            <div class="input-group">
                                <div class="input-group-btn" >
                                    <select  class="form-control" style = "width: auto;" >
                                        <option value="">使用者</option>
                                        <option value="">賣場名稱</option>
                                        <option value="">email</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="尋找自己的商品">
                                <span class="input-group-btn"> 
                                    <button class="btn btn-default" type="button">search</button> 
                                </span>
                            </div>
                        </div>
                    </form> 
                </section>
                <br>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">使用者名稱</th>
                            <th scope="col">賣場名稱</th>
                            <th scope="col">email</th>
                            <th scope="col">操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>test</td>
                            <td>賣場</td>
                            <td>email</td>
                            <td>
                            <a type="button" href="seeuser.php"class="btn btn-success">查看</a>
                            <a type="button" href="changeuser.php" class="btn btn-primary">修改</a>                             
                                <button class="btn btn-default">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>test</td>
                            <td>賣場</td>
                            <td>email</td>
                            <td>
                            <a type="button" href="seeuser.php"class="btn btn-success">查看</a>
                            <a type="button" href="changeuser.php" class="btn btn-primary">修改</a>     
                                <button class="btn btn-default">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>test</td>
                            <td>賣場</td>
                            <td>email</td>
                            <td>
                            <a type="button" href="seeuser.php"class="btn btn-success">查看</a>
                            <a type="button" href="changeuser.php" class="btn btn-primary">修改</a>                           
                                <button class="btn btn-default">刪除</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>
 
             

            </div>
           
        </div>

 </div>

        
    </div>  
</div> 
</div> 
    
</body>
</html>