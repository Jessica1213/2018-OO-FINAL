<?php
require_once ("autoload.php");
SessionManager::start();
//require_once ("checkLogin.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/user.js"></script>
    <script type="text/javascript" src="js/product.js"></script>

</head>
<body>
<?php require_once ("navbar.php")?>
<div>
    <section class="jumbotron text-center" >
        <div class="container">
            <h1 class="jumbotron-heading">拼命買</h1>
        </div>
    </section>
</div>
<div class="album py-5 ">
    <div class="container" align="center">
        <section class="col-xs-12 col-xs-offset-3">
            <form class="form-horizo​​ntal">
                <div class="form-group col-xs-6">
                    <div class="input-group col-xs-12 ">
                        <div class="input-group-btn" >
                            <select  class="form-control" style = "width: auto;" >
                                <option selected>Choose...</option>
                                <option value="">種類</option>
                                <option value="">名稱</option>
                                <option value="">登刊時間</option>
                            </select>
                        </div>
                        <input id="search" type="text" class="form-control " placeholder="請輸入..." onkeypress="searchItem()">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="searchItem()">search</button>
                        </span>
                    </div>
                </div>
            </form>
        </section><br><br>
        <div class="row" style="width:auto;" id="itemlist"></div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById("itemlist").innerHTML += showItems()
</script>
</body>
</html>