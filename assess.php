
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/login_function.js"></script>
    <script type="text/javascript" src="js/product.js"></script>
</head>
<body>

<?php require_once ("navbar.php")?>

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
                            <h2 valign="top">***的評價</h2>
                            
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
      <th scope="col">評價</th>
      <th scope="col">評語</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>time</td>
      <td>thing</td>
      <td>分數</td>
      <td>評語</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>time</td>
      <td>thing</td>
      <td>分數</td>
      <td>評語</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>time</td>
      <td>thing</td>
      <td>分數</td>
      <td>評語</td>
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