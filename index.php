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
            <img id="PPMpicture" src="resource/pin_means_mine.png">
    </div>

    <div class="album py-5 " style="margin-top: 5em">
        <div class="container" align="center">
            <section class="col-xs-12 col-xs-offset-3" style="margin-left: 10%;>
                <form class="form-horizo​​ntal">
                    <div class="form-group col-xs-6" style="width: 75%;">
                        <div class="input-group col-xs-12 ">
                            <div class="input-group-btn" >
                            </div>
                            <input id="search" type="text" class="form-control " style="width:" name="searchText" placeholder="請輸入...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="searchItemIndex()";">search</button>
                            </span>
                            <div class="input-group-btn" >
                            </div>
                        </div>
                    </div>
                </form>
            </section><br><br>

            <div class="row" style="width:auto; margin-bottom: 5vh;" id="itemlist"></div>
        </div>
    </div>

    <div class="container" id="allCategory"></div>
<script type="text/javascript">
    document.getElementById("allCategory").innerHTML+=listAllCategory();
</script>
</body>
</html>
