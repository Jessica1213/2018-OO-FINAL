<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>拼命買</title>
    <?php require_once ("head.php")?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="imagetoolbar" content="no" />
    <script type="text/javascript" src="js/login_function.js"></script>
    <script type="text/javascript" src="js/product.js"></script>

</head>

<body>
<?php require_once ("navbar.php")?>
<div class="wrapper row5">
  <div  id="login">
    <form  action="" name="loginForm" method="post" onsubmit="return false;">
      <table>
        <tr>
          <th>LOGIN</th>
        </tr>
        <tr>
          <td>顧客帳號 : <input class="text" type="text"  name="username"></td>
        </tr>
        <tr>
          <td>顧客密碼 : <input class="text" type="password"   name="password"></td>
        </tr>
        <tr>
          <!--39 須將帳號密碼資訊與資料庫比對-->
          <td>
              <input class="button" type="submit" name="submit"  onclick="return checkLogin();" value="登入" >
              <input class="button" type="button" onclick="location.href='register.php'" value="註冊">
          </td>
        </tr>
      </table>
    </form>
  </div>
</div>
</body>
</html>