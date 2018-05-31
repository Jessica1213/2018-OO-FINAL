<?php
/**
 * Created by PhpStorm.
 * User: jessica
 */
?>
<?php
    // require_once("autoload.php");
    // SessionManager::start();
    // require_once("checkLogin.php");
   
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<html lang="en">
<head>
    <title>拼命買</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/login_function.js"></script>
    <link rel="stylesheet" href="styles/layout.css" type="text/css"/>
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
</head>
<body>


<div>

  <div id="topnav">
    <ul>
      <li><a href="index.php"><strong>首頁</strong></a></li>
      <li><a href="#.php"><strong>購物車</strong></a></li>
      <li><a href="select_Login.php"><strong>登入/註冊</strong></a></li>
    </ul>
  </div>
    <section class="jumbotron text-center" >
        <div class="container">
            <h1 class="jumbotron-heading">***的賣場</h1>
        </div>
    </section>
    
</div>
<div class="album py-5 ">
    <div class="container " align="center">
        <div class="row">
            <div class="col-md-2">
            <section class="jumbotron text-center" >
                        <a href="Introduce.php" class="list-group-item list-group-item-action">介紹</a>
                        <a href="commodity.php" class="list-group-item list-group-item-action list-group-item-primary">商品</a>
                        <a href="assess.php" class="list-group-item list-group-item-action list-group-item-secondary">評價</a>
                        <a href="wallet.php" class="list-group-item list-group-item-action list-group-item-success">錢包</a>
                        <a href="Sales.php" class="list-group-item list-group-item-action list-group-item-danger">銷售</a>   
            </section>  
            </div>
            <div class="col-md-10">
                <div class="row">
                <div class="col" style="wight:auto;background:#eee">
                    <section class=" text-left " >
                        <div class="container">
                            <h2 valign="top">***的錢包</h2>
                            
                        </div>
                    </section>
                    <HR style="wight:auto;" size="10">
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
                <div class="row" style="wight:auto;background:#eee">
                
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