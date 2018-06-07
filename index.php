<?php
require_once ("autoload.php");
SessionManager::start();
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
    <div class="container" id="picture">
            <img src="resource/pin_means_mine.png" style="width: 100%; height: 100%;">
    </div>

    <div class="container" id="search-box">
        <input id="search" class="sreachInput" type="text" placeholder="搜尋" name="searchText" >
        <input class="sreachButton" type="image" name="searchSubmit" onclick="searchItemIndex()" img src="resource/search.png" style="width:8%;" >
    </div>

    <div id="product_picture_info">
        <ul id="allCategory"></ul>
    </div>
<script type="text/javascript">
    document.getElementById("allCategory").innerHTML+=listAllCategory();
</script>
</body>
</html>