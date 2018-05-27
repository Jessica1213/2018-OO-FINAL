
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/login_function.js"></script>
    <script type="text/javascript" src="js/search_product.js"></script>
    <link href="styles/layout.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php require_once ("navbar.php")?>
    <div class="container" id="logo">
            <img id="picture" src="resource/images/googlelogo.png">
    </div>

    <div class="container" id="search-box">
        <input id="search" class="searchInput" type="text" name="searchText">
        <input class="searchButton" type="button" name="searchSubmit" onclick="searchItem()" style="">
    </div>

    <div id="product_picture_info">
        <ul>
            <li><a href="#.html"><img src="resource/images/VIGOR_series.jpg" alt="" /></a></li>
            <li><a href="#.html"><img src="resource/images/clutch_series.jpg" alt="" /></a></li>
        </ul>
    </div>

<!--<footer>-->
<!--    --><?php //require_once("./footer.php");?>
<!--</footer>-->
</body>
</html>