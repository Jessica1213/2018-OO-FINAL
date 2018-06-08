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
                                <h2 valign="top">所有優惠
                                <a href="newoffer.php" class="btn btn-default" type="button"  style="background-color:#FFD23C">新增</a> 
                                </h2>
                            </div>
                        </section> 
                        <HR style="width:auto;" size="10">
                    </div>

                </div>


               
                
                <div class="row" style="width:auto;background:#eee">
                <br>
                <section class="col">
                    <form class="form-horizo​​ntal" role="form">
                            <div class="input-group"style = "width: 80%;" >
                                <div class="input-group-btn" >
                                    <select  class="form-control" style = "width: auto;" >
                                        <option class="form-control">類別</option>
                                        <option class="form-control">名稱</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control" placeholder="尋找優惠">
                                <span class="input-group-btn"> 
                                    <button class="btn btn-default" type="button">search</button> 
                                </span>
                            </div>
                        <br>   
                        <div class="input-group" style = "width: 80%;" >
                            <label  class="form-control"type="text" style = "width: 20%;" >開始日期</label>
                            <input  class="form-control" type="date" style = "width: 30%;"  required="required" min="<?php echo date ("y-m-d",strtotime("-1months"));?>"max="<?php echo date ("y-m-d",strtotime("+1months"));?>">
                            <label  class="form-control"type="text" style = "width: 20%;" > 截止時間</label>
                            <input  class="form-control" type="date" style = "width: 30%;"  required="required" min="<?php echo date ("y-m-d",strtotime("-1months"));?>"max="<?php echo date ("y-m-d",strtotime("+1months"));?>">
                        
                            <span class="input-group-btn">    
                                <button class="btn btn-default" type="button">search</button> 
                            </span>
                        </div>
                        <HR style="width:auto;" size="10">
                    </form> 
                </section>
                <br>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">優惠名稱</th>
                            <th scope="col">類別</th>
                            <th scope="col">優惠開始時間</th>
                            <th scope="col">優惠結束時間</th>
                            <th scope="col">設定</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>九折優惠</td>
                            <td>全館</td>
                            <td>2018/04/08</td>
                            <td>2018/09/10</td>
                            <td>
                                <button class="btn btn-success">查看</button>
                                <a type="button" href="changeoffer.php" class="btn btn-primary">修改</a>
                                <button class="btn btn-warning">暫停</button>
                                <button class="btn btn-default">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>九折優惠</td>
                            <td>全館</td>
                            <td>2018/04/08</td>
                            <td>2018/09/10</td>
                            <td>
                            <button class="btn btn-success">查看</button>
                            <a type="button" href="changeoffer.php" class="btn btn-primary">修改</a>
                                <button class="btn btn-warning">暫停</button>
                                <button class="btn btn-default">刪除</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>九折優惠</td>
                            <td>全館</td>
                            <td>2018/04/08</td>
                            <td>2018/09/10</td>
                            <td>
                                <button class="btn btn-success">查看</button>
                                <a type="button" href="changeoffer.php" class="btn btn-primary">修改</a>
                                <button class="btn btn-warning">暫停</button>
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