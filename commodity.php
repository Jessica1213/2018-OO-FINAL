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

        <section class="col-xs-12 col-xs-offset-3">
            <form class="form-horizo​​ntal" role="form">
                <div class="col-xs-6">
                    <div class="input-group">
                        <div class="input-group-btn">
                            <select name="" class="form-control" >
                                <option value="">種類</option>
                                <option value="">名稱</option>
                                <option value="">登刊時間</option>
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
        <br>
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
                            <h2 valign="top">***的商品</h2>
                        </div>
                    </section>
                    <HR style="wight:auto;" size="10">
                </div>  
                </div>  

            <div class="row" style="wight:auto;background:#eee">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;" src="thing\文具\stationery.001.jpg" data-holder-rendered="true">
                <div class="card-body" align="left">
                    <div class="row">
                        <div class="col">
                            <h4>商品名稱1</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;"  src="thing\生活用品\daily.003.jpg"data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱2</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;"  src="thing\兒童用品\baby.001.jpg" data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱3</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;" src="thing\服裝\clothes.002.jpg" data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;" src="thing\美容保養\makeups.003.jpg" data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;" src="thing\玩具\toy.001.jpg" data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;" src="thing\家具\furniture.001.jpg" data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;" src="thing\書籍\book.002.jpg" data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="database [100%x225]" style="height: 225px; width: 100%; display: block;" src="thing\運動用品\sport.003.jpg" data-holder-rendered="true">
              <div class="card-body" align="left">
              <div class="row">
                        <div class="col">
                            <h4>商品名稱</h4> 
                        </div>
                        <div class="col">
                            <h4 color="success"align="right">售價：1000</h4>
                        </div>  
                    </div>
                    <h6>商品描述</h6>
                    <p class="card-text">這是一個物品</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">瀏覽</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">加入購物車</button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
              </div>
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