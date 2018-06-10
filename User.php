<?php
require_once ("autoload.php");
SessionManager::start();
require_once ("checkLogin.php");
require_once ("checkAdmin.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/user.js"></script>
    <script type="text/javascript" src="js/product.js"></script>
    <script type="text/javascript" src="js/function.js"></script>
    <script type="text/javascript" src="js/jsrequest.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
</head>
<body>


<?php require_once ("navbar.php")?>

<div class="album py-5 ">
    <div class="container " align="center" style="margin-top: 5em">
        <div class="row">
            <div id="functions" class="col-md-2  col-xs-2"></div>
            <div class="col-md-10 col-xs-10">
                <div class="row">
                    <div class="col" style="width:auto;background:#eee">
                        <section class=" text-left " >
                            <div class="container">
                                <h2 align="top">所有使用者資料</h2>
                            </div>
                        </section> 
                        <HR style="width:auto;" size="10">
                    </div>

                </div>
                
                <div class="row" style="width:auto;background:#eee">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">帳號</th>
                            <th scope="col">email</th>
                            <th scope="col">操作</th>
                        </tr>
                        </thead>
                        <tbody id="userlist">

                        </tbody>
                    </table>

                </div>
 
             

            </div>
           
        </div>
    </div>
</div>
<script type="text/javascript">
    showAdminOptions();
    showAlluser();
</script>
</body>
</html>