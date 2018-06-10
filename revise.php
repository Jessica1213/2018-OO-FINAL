<?php
require_once ("autoload.php");
SessionManager::start();
$bll = new BLL\UserBLL();
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
    <script type="text/javascript" src="js/function.js"></script>
</head>
<body>


<?php require_once ("navbar.php")?>

<div class="album py-5 ">
    <div class="container " align="center" style="margin-top: 5em">

        <div class="row">
            <div id = "functions" class="list-group col-md-2 col-xs-2"></div>
            <div class="col-md-10 col-xs-10">
                <div class="row">
                <div class="col" style="width:auto;background:#eee">
                    <section class=" text-left " >
                        <div class="container">
                            <h2 align="top"><?=$bll->getUsername(SessionManager::get("UID"))?>的檔案</h2>
                        </div>
                    </section>
                    <HR style="width:auto;" size="10">
                </div>  
                
                </div>
                <div class="row" style="width:auto;background:#eee">
                    <form  action="" name="InfoForm" method="post" onsubmit="return false;">
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">個人資料</th>
                            </tr>
                            </thead>
                        <tbody>
                        <tr>
                            <th scope="row">
                                <label >暱稱: </label>
                                <input name="name" type="text" value="<?=$bll->getUsername(SessionManager::get("UID"))?>" >
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">
                                <label >email: </label>
                                <input name="email" type="text" value="<?=$bll->getEmail(SessionManager::get("UID"))?>" >
                            </th>  
                        </tr>
                        <tr>
                            <th scope="row">
                            <label >* 新密碼: </label>
                            <input name="pwd" type="password" placeholder="新密碼">
                            </th>
                        </tr>
                        <tr>
                            <th scope="row">
                            <label >* 確認密碼: </label>
                            <input name="check" type="password" placeholder="再次確認">
                            </th>
                        </tr>
                        
                        </tbody>
                        
                        </table>
                        <button onclick="location.href='Introduce.php'"> 取消修改 </button>
                        <button onclick="UpdatePersonalInfo()"> 確認修改 </button>
                    </div>
                    </form>
                    <div class="col-md-4">
                        <img src="<?=$bll->getImage(SessionManager::get("UID"))?>" class="img-fluid" alt="Responsive image" width="250" height="250">
                        <button> 更換頭貼 </button>
                    </div>
                </div>    
 
                </div>

            </div>
           
        </div>
    </div>  

<script type="text/javascript">showOptions();</script>
</body>
</html>