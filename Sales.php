<?php
require_once ("autoload.php");
SessionManager::start();
require_once ("checkLogin.php");
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
                                <h2 align="top"><?=$bll->getUsername(SessionManager::get("UID"))?>的銷售</h2>

                            </div>
                        </section>
                        <HR style="width:auto;" size="10">
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
                <div class="row" style="width:auto;background:#eee">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">交易時間</th>
                            <th scope="col">物品</th>
                            <th scope="col">完成與否</th>
                            <th scope="col">確認</th>
                            <th scope="col">評價</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>time</td>
                            <td>thing</td>
                            <td>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </td>
                            <td>
                            <button type="button" class="btn " style="background-color:#FF8076"> 確認 </button>
                            </td>
                            <td>評價</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>time</td>
                            <td>thing</td>
                            <td>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </td>
                            <td>
                            <button type="button" class="btn " style="background-color:#FF8076"> 確認 </button>
                            </td>
                            <td>評價</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>time</td>
                            <td>thing</td>
                            <td>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                    </label>
                                </div>
                            </td>
                            <td>
                            <button type="button" class="btn " style="background-color:#FF8076"> 確認 </button>
                            </td>
                            <td>評價</td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>

    </div>
</div>
<script type="text/javascript">showOptions();</script>
</body>
</html>