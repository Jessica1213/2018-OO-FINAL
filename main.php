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
    <script type="text/javascript" src="js/jsrequest.js"></script>

</head>
<body>
<?php require_once ("navbar.php")?>
<div>
    <div class="container" id="head">
        <a href="index.php"><img src="resource/pin_means_mine.png" style="width: 100%; height: 100%;"></a>
    </div>
</div>
<div class="album py-5 ">
    <div class="container" align="center">
        <section class="col-xs-12 col-xs-offset-3">
            <form class="form-horizo​​ntal">
                <div class="form-group col-xs-6">
                    <div class="input-group col-xs-12 ">
                        <div class="input-group-btn" >
                            <select  id="choice" class="form-control" onchange="chooseType();" style = "width: auto;" >
                                <option value="1">Choose...</option>
                                <option value="2">名稱</option>
                                <option value="3">種類</option>
                            </select>
                        </div>
                        <input id="search" type="text" class="form-control " placeholder="請輸入..." style="width: auto;">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="searchItemMain();">search</button>
                        </span>
                        <select  id="sort" class="form-control"  style = "width: auto;" onchange="showItems(keyword, cate);">
                            <option value="1">價格少到多</option>
                            <option value="2">價格多到少</option>
                        </select>
                    </div>
                </div>
            </form>
        </section><br><br>
       
        <div class="row" style="width:auto; margin-bottom: 5vh;" id="itemlist"></div>
    </div>
</div>
<script type="text/javascript">
    var keyword = "<?= $_GET["keyword"]?>";
    var cate = "<?= $_GET["searchby"]?>";
    showItems(keyword, cate);
</script>
</body>
</html>