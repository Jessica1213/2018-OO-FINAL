<?php
require_once("autoload.php");
SessionManager::start();
if(BLL\UserBLL::isLogIn()) {
    header("HTTP/1.1 302 Redirect");
    header("Location: index.php");
    exit;
}
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

<div class="wrapper row5">
    <div  id="shoppingCartList">
        <form action="" name="" method="" onsubmit="">
            <table id = "shoppingCartList_Header">
                <tr>
                    <td>確認</td>
                    <td>商品</td>
                    <td>單價</td>
                    <td>數量</td>
                    <td>價格</td>
                    <td><a href="javascript:" onclick="addRow()">新增一列</a></td>  <!-- 此行測試用，測試完成請在此行開頭加上 "<!--"  -->
                </tr>
            </table>
            <table id = "shoppingCartList_Footer">
                <tr>
                    <td><label>Total Price：</label><input type="text" id="" name="priceOutput"></td>    <!-- 此行需加入：回傳總價格 -->
                </tr>
                <tr>
                    <td>
                        <input class="button" formmethod="post" type="submit" name=""  onclick="location.href='#.html'" value="繼續購物" >    <!-- 此行需更改：點擊後的目標網址 -->
                        <input class="button" type="submit" name="" onclick="location.href='#.html'" value="結帳"> <!-- 此行需更改：點擊後的目標網址 -->
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<script type="text/javascript">
    function addRow(){
        var table = document.getElementById("shoppingCartList_Header");
        var tOBj = table.tBodies[0];
        var row  = document.createElement("tr");//產生一ROW;
        var cell = document.createElement("td");//產生第一欄;
        for (var i=1;i <= 2;i++) {    // '2' 改成購買商品數
            row = document.createElement("tr");//產生一ROW
            for (var j = 1; j <= 5; j++) {
                cell = document.createElement("td");//產生第一欄
                switch(j){
                    case 1:
                        cell.innerHTML = "<input  type=\"radio\" name=\"doubleCheck\">";  //設定欄位內容，將確認, ' \ ' 重要。
                        break;
                    case 2:
                        cell.innerHTML = "ProductName";  //設定欄位內容，項目名稱, ' \ ' 重要。
                        break;
                    case 3:
                        cell.innerHTML = "ProductPrice";  //設定欄位內容，單價, ' \ ' 重要。
                        break;
                    case 4:
                        cell.innerHTML = "<select>\n" +
                            "  <option value=\"1\">1</option>\n" +
                            "  <option value=\"2\">2</option>\n" +
                            "  <option value=\"3\">3</option>\n" +
                            "  <option value=\"4\">4</option>\n" +
                            "  <option value=\"5\">5</option>\n" +
                            "</select>";  //設定欄位內容，數量, ' + ' 與 '  \ ' 重要。
                        break;
                    case 5:
                        cell.innerHTML = "Price";  //設定欄位內容，價格, ' \ ' 重要。
                        break;
                    default:
                        break;
                }
                row.appendChild(cell);//將設定的欄位內容塞入ROW中
            }

            if(i % 2 != 0){    //修改列顏色，美術不好不知道怎麼選顏色ˊˇˋ"
                row.style.background = '#f9f2f4';
            }else{
                row.style.background = '#02df82';
            }

            tOBj.appendChild(row);//將ROW塞進表格

        }
    }
</script>
</body>
</html>